# =========================
# Stage 1: Build frontend
# =========================
FROM node:22-alpine AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY resources ./resources
COPY public ./public
COPY vite.config.* ./

RUN npm run build


# =========================
# Stage 2: Laravel + PHP
# =========================
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    libzip-dev \
    libpq-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install \
    pdo_mysql \
    pdo_pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel project
COPY . /var/www

# Install PHP dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Copy frontend build from Node stage
COPY --from=frontend /app/dist /var/www/public/build

# Copy Nginx configuration
COPY docker/nginx.conf /etc/nginx/sites-available/default

# Copy startup script
COPY docker/start.sh /usr/local/bin/start.sh

# Make startup script executable
RUN chmod +x /usr/local/bin/start.sh

# Set Laravel permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# Expose Railway port
EXPOSE 10000

# Start application
CMD ["/usr/local/bin/start.sh"]