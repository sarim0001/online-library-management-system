FROM php:8.2-cli
WORKDIR /app
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY . /app
EXPOSE 8080
# -t points to the library subfolder
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app/library"]
