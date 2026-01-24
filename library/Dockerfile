FROM php:8.2-apache

# Disable all MPMs explicitly
RUN a2dismod mpm_event || true
RUN a2dismod mpm_worker || true

# Enable ONLY prefork
RUN a2enmod mpm_prefork

# PHP extensions
RUN docker-php-ext-install mysqli

# Apache rewrite
RUN a2enmod rewrite

# Copy project
COPY . /var/www/html/

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html
