FROM php:8.3-cli

# Базовый PHP-образ для нашего приложения.
# Сюда ставим системные зависимости, которые нужны PHP для работы с PostgreSQL.
RUN apt-get update \
    && apt-get install -y libpq-dev git unzip \
    && docker-php-ext-install pdo_pgsql pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Берем Composer из официального образа, чтобы внутри контейнера можно было ставить PHP-пакеты.
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Все команды контейнера будут выполняться из корня проекта.
WORKDIR /app
