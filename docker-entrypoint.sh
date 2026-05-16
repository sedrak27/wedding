#!/bin/bash
set -e

# Cache config and run migrations
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Fix permissions after artisan commands (since they run as root)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# ── Apache MPM fix (runtime guarantee, bypasses any build cache) ────────────
echo "INFO: MPM modules before fix:"
ls /etc/apache2/mods-enabled/mpm_* 2>/dev/null || echo "  (none)"

find /etc/apache2/mods-enabled -name 'mpm_*' -delete
ln -sf /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load
ln -sf /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf

echo "INFO: MPM modules after fix:"
ls /etc/apache2/mods-enabled/mpm_*

# Start Apache
exec "$@"
