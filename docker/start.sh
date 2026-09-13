#!/bin/bash

set -e

# Use Railway's PORT
PORT=${PORT:-10000}

# Update Nginx to listen on Railway's assigned port
sed -i "s/listen 10000;/listen ${PORT};/" /etc/nginx/sites-available/default

# Make sure Laravel runtime directories exist
mkdir -p storage/framework/views
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p bootstrap/cache

# Make sure Laravel can write to runtime directories
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Clear and rebuild Laravel config/route cache
php artisan config:clear
php artisan cache:clear
php artisan config:cache
php artisan route:cache

# Start PHP-FPM
php-fpm -D

# Start Nginx
nginx -g "daemon off;"