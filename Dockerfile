# Use PHP 8.2 with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip build-essential python3 \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Node.js 18
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies
RUN npm install

# Set Node memory limit (important for Vite build in Docker)
ENV NODE_OPTIONS=--max_old_space_size=4096

# Build Vite assets
RUN npm run build

# Set permissions for Laravel
RUN chown -R www-data:www-data storage bootstrap/cache public/build

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set Apache document root to public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public