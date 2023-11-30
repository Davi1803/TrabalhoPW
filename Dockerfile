# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the application files into the container
COPY . /var/www/html

# Set the working directory in the container
WORKDIR /var/www/html

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y libpq-dev \
    libicu-dev \
    libzip-dev \
	&& docker-php-ext-configure mysqli \
    && docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli \
    && a2enmod rewrite

# Expose port 80
EXPOSE 80

# Define the entry point for the container
CMD ["apache2-foreground"]
