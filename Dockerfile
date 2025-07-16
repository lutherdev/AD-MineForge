FROM php:8.3.21-fpm-alpine3.20

ENV NODE_ENV=development

RUN addgroup -S developer && adduser -S lutherdev -G developer

WORKDIR /var/www/html

RUN apk add --no-cache \
    git \
    unzip \
    autoconf \
    make \
    g++ \
    icu-dev \
    libzip-dev \
    zlib-dev \
    postgresql-dev \
    libpq \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev

RUN docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/ \
    && docker-php-ext-install \
    gd \
    pgsql \
    pdo_pgsql \
    intl \
    zip

COPY --from=composer:2.6 /usr/bin/composer /usr/local/bin/composer

COPY . /var/www/html/
USER lutherdev
RUN composer install --no-interaction --prefer-dist

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "router.php"]