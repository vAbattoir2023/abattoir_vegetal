FROM php:8.0.2-apache

# Install PHP extensions and Composer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions intl mongodb && \  
    apt update && apt install -yqq zip git

# Install Composer
RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls
RUN mv composer.phar /usr/local/bin/composer

# Set working directory and copy application files
WORKDIR /var/www/
COPY . /var/www/

# Copy Apache configuration
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Set environment variables
ENV APP_ENV=prod

# Remove unnecessary files, install dependencies, and warm up cache
RUN rm -rf /var/www/vendor && \
    rm -rf /var/www/.git && \
    rm -rf /var/www/.env.local && \
    composer install && \
    php bin/console cache:clear && \
    php bin/console cache:warmup && \
    chown -R www-data:www-data /var/www

# Set entry point
ENTRYPOINT ["bash", "./docker/docker.sh"]

# Expose port 80
EXPOSE 80
