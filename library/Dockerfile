FROM php:8.2-apache

# Disable conflicting MPMs
RUN a2dismod mpm_event mpm_worker && a2enmod mpm_prefork

# Install PHP MySQL extension
RUN docker-php-ext-install mysqli

# Enable Apache rewrite
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

WORKDIR /var/www/html

# Permissions
RUN chown -R www-data:www-data /var/www/html
