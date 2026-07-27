FROM php:8.2-apache

WORKDIR /var/www/html

# Enable common Apache modules useful for PHP apps.
RUN a2enmod rewrite headers

# Copy project files into the container.
COPY . /var/www/html/

# Ensure Apache can read the app files.
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
