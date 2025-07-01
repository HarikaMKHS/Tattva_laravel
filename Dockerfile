FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory inside container
WORKDIR /var/www/html

# Copy Laravel files
COPY . /var/www/html

# Set document root to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache config to use new document root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Laravel Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]
