FROM php:7.3-fpm-alpine

# Install PHP extensions
RUN apk update && apk upgrade --update && apk --no-cache add \
    git \
    vim less \
    icu-dev \
    libpng-dev \
    jpeg-dev \
    autoconf \
    make \
    g++ \
    gcc \
    mysql-client \
    && rm -r /var/cache/apk/*

RUN docker-php-ext-configure \
    gd --with-png-dir=/usr/include --with-jpeg-dir=/usr/include && \
    docker-php-ext-install -j$(nproc) \
    iconv \
    intl \
    gd \
    mbstring \
    pdo_mysql 
    
COPY  ./php.ini /usr/local/etc/php-fpm.d/my-php.ini
COPY  ./php-fpm.conf /usr/local/etc/php-fpm.d/my-php-fpm.conf
