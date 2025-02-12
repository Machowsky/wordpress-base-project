FROM php:8.2-fpm

# Install PHP extensions required by WordPress and Composer dependencies.
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

# Set working directory inside the container.
WORKDIR /var/www/html

CMD ["php-fpm"]

RUN docker-php-ext-install mysqli pdo pdo_mysql