FROM php:8.2-cli

RUN apt-get -y update \
  && apt-get install -y libicu-dev \
  && apt-get install -y libgmp-dev \
  && docker-php-ext-configure intl \
  && docker-php-ext-configure bcmath \
  && docker-php-ext-configure gmp \
  && docker-php-ext-install intl \
  && docker-php-ext-install bcmath \
  && docker-php-ext-install gmp \
  && docker-php-ext-install pdo_mysql


RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"