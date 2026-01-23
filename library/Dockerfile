FROM php:8.1-apache

RUN a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
