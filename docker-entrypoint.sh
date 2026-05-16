#!/bin/bash
set -e

# ── Railway injects PORT — Apache must listen on it ───────────────────────────
PORT="${PORT:-80}"
echo "INFO: Railway PORT=${PORT}"

# Update Apache to listen on $PORT instead of the default 80
sed -i "s/^Listen 80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# ── Apache MPM fix (runtime guarantee) ────────────────────────────────────────
find /etc/apache2/mods-enabled -name 'mpm_*' -delete
ln -sf /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load
ln -sf /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf

# ── Build a production .env from Railway's injected environment variables ─────
ENV_FILE="/var/www/html/.env"
echo "INFO: Writing production .env from environment..."

# Resolve DB URL: prefer DATABASE_PRIVATE_URL, then DATABASE_URL, then DATABASE_URI
DB_RESOLVED_URL="${DATABASE_PRIVATE_URL:-${DATABASE_URL:-${DATABASE_URI:-}}}"

cat > "$ENV_FILE" <<EOF
APP_NAME="${APP_NAME:-Sedrak & Gohar}"
APP_ENV=production
APP_KEY=${APP_KEY}
APP_DEBUG=${APP_DEBUG:-false}
APP_URL=${APP_URL:-http://localhost}

APP_LOCALE=hy
APP_FALLBACK_LOCALE=hy
APP_FAKER_LOCALE=hy_AM

APP_MAINTENANCE_DRIVER=file

BCRYPT_ROUNDS=12

LOG_CHANNEL=stderr
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=${LOG_LEVEL:-error}

DB_CONNECTION=pgsql
DATABASE_URL=${DB_RESOLVED_URL}
DATABASE_PRIVATE_URL=${DB_RESOLVED_URL}
DB_URL=${DB_RESOLVED_URL}
DB_HOST=${PGHOST:-127.0.0.1}
DB_PORT=${PGPORT:-5432}
DB_DATABASE=${PGDATABASE:-laravel}
DB_USERNAME=${PGUSER:-postgres}
DB_PASSWORD=${PGPASSWORD:-}
DB_SSLMODE=${DB_SSLMODE:-prefer}

SESSION_DRIVER=cookie
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync

CACHE_STORE=file

MAIL_MAILER=log
MAIL_FROM_ADDRESS="${MAIL_FROM_ADDRESS:-hello@example.com}"
MAIL_FROM_NAME="\${APP_NAME}"

ADMIN_PASSWORD=${ADMIN_PASSWORD:-wedding2026}
EOF

echo "INFO: .env written. DB_URL=${DB_RESOLVED_URL:0:40}..."

# ── Artisan bootstrap ─────────────────────────────────────────────────────────
echo "INFO: Running artisan setup..."
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations — non-fatal so Apache still starts if DB isn't ready
echo "INFO: Running migrations..."
php artisan migrate --force || echo "WARNING: Migration failed — app will still start"

# ── Fix permissions ───────────────────────────────────────────────────────────
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

echo "INFO: Starting Apache on port ${PORT}..."
exec "$@"
