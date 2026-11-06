FROM php:8.2-cli

# Install system dependencies & PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) zip gd pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Install Composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy application files
COPY . /app

# Install PHP dependencies
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --ignore-platform-reqs

# Setup Laravel storage and cache directories
RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# Bind to Vercel port
ENV PORT=80
EXPOSE 80

# Start PHP built-in server routing all requests through Laravel's server.php
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-80} -t public server.php"]
