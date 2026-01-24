FROM php:8.2-cli

WORKDIR /app

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Copy project
COPY . /app

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]
