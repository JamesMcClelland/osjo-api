FROM php:7.2-cli
WORKDIR /app
RUN apt-get update && apt-get install -y \
    zip libzip-dev git \
    build-essential \
    htop nano curl

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer global require hirak/prestissimo
COPY . /app
WORKDIR /app
RUN composer install
CMD php artisan serve --host=0.0.0.0