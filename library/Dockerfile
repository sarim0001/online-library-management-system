FROM php:8.2-apache

# Force remove ALL MPMs first
RUN rm -f /etc/apache2/mods-enabled/mpm_*

# Enable ONLY prefork (required for PHP)
RUN a2enmod mpm_prefork

# PHP extensions
RUN docker-php-ext-install mysqli

# Enable rewrite
RUN a2enmod rewrite

# Copy project
COPY . /var/www/html/

WORKDIR /var/www/html

# Permissions
RUN chown -R www-data:www-data /var/www/html
