#!/bin/bash
set -e

# Cache config and run migrations
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Start Apache
exec "$@"
