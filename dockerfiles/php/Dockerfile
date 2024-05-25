FROM php:8.1-fpm

RUN apt-get update -y && apt-get install -y libpng-dev zlib1g-dev libzip-dev zip libfreetype6-dev libwebp-dev libjpeg62-turbo-dev libgmp-dev libldap2-dev netcat-traditional sqlite3 libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install mysqli pdo pdo_mysql pdo_sqlite gd zip gmp bcmath pcntl ldap sysvmsg exif && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

#RUN curl -sS https://getcomposer.org/installer | php && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install supervisor
RUN apt-get install -y supervisor

# Set working directory
WORKDIR /var/www

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
# PHP Error Log Files
RUN mkdir -p /home/logs/supervisor-logs

# add root to www group
RUN chown -R www:www-data /home/logs/ && chmod -R ug+w /home/logs/supervisor-logs

# Change current user to www
USER www

# Copy code to /var/www
COPY dockerfiles/php/run.sh /var/run.sh

# Expose port 9000 and start php-fpm server
EXPOSE 9000

ENTRYPOINT ["/var/run.sh"]
