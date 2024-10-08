FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    oniguruma-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    bash \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www

# Copy composer files
COPY composer.json composer.lock ./

# Install dependencies
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the application code
COPY . .

# Generate autoloader
RUN composer dump-autoload --optimize

RUN php artisan key:generate

RUN php artisan optimize

RUN docker-php-ext-install pdo pdo_mysql

# Set file permissions
RUN chown -R www-data:www-data /var/www

# Instead, add these lines:
RUN mkdir -p /var/www/storage/logs
RUN chmod -R 775 /var/www/storage
    
# Use PHP-FPM to run the application
CMD ["php-fpm"]