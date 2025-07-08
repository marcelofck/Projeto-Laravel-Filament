FROM php:8.3-fpm

# Instale dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    npm \
    nodejs \
    libicu-dev \
    libzip-dev \
    pkg-config

# Instale extensões PHP (agora incluindo intl e zip)
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl zip

# Instale Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

CMD php artisan serve --host=0.0.0.0 --port=$PORT 