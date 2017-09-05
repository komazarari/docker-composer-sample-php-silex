FROM php:7.1-apache

RUN docker-php-ext-install -j$(nproc) mbstring
RUN docker-php-ext-install -j$(nproc) opcache
RUN docker-php-ext-install -j$(nproc) pdo pdo_mysql

RUN apt-get update && apt-get install -y zlib1g-dev \
 && pecl install redis-3.1.3 \
 && docker-php-ext-enable redis \
 && apt-get autoremove --purge -qq \
 && apt-get clean \
 && rm -rf /var/cache/apt/archives/* /var/lib/apt/lists/*

COPY php.ini /usr/local/etc/php/
COPY app.conf /etc/apache2/sites-available/app.conf
RUN a2dissite '*default*' \
 && a2ensite app \
 && service apache2 restart
