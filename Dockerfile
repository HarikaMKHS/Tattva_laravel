# Use official PHP with Apache
FROM php:8.2-apache

# Enable mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip curl git \
    libzip-dev \
    libpq-dev \
    libssl-dev \
    libcurl4-openssl-dev \
    redis \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath zip gd

# Install Redis PHP extension
RUN pecl install redis && docker-php-ext-enable redis

# Install Composer (latest from composer image)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Give permissions to Laravel folders
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache \
 && chmod -R 775 \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Expose port 80 (default)
EXPOSE 80
