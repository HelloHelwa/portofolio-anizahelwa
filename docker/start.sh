#!/bin/bash

# Generate app key if not set (fallback only, should be set via env var)
php artisan config:clear
php artisan cache:clear

# Run migrations automatically on deploy
php artisan migrate --force

# Cache config, routes, views for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start PHP-FPM in background
php-fpm -D

# Start nginx in foreground
nginx -g "daemon off;"