#!/bin/bash

set -e

# Use Railway's PORT
PORT=${PORT:-10000}

# Update Nginx to listen on Railway's assigned port
sed -i "s/listen 10000;/listen ${PORT};/" /etc/nginx/sites-available/default

# Laravel cache
php artisan config:clear
php artisan cache:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start PHP-FPM
php-fpm -D

# Start Nginx
nginx -g "daemon off;"