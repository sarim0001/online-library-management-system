FROM php:8.2-apache

# Disable other MPMs and enable prefork (required for mod_php)
RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork

# Enable Apache rewrite
RUN a2enmod rewrite

# Install PDO MySQL (IMPORTANT for your earlier error)
RUN docker-php-ext-install pdo pdo_mysql

# Copy project files
COPY . /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 8080

# Apache runs automatically
