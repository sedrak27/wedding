#!/bin/bash
set -e

# Cache config and run migrations
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Fix permissions after artisan commands (since they run as root)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Start Apache
exec "$@"
