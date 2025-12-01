FROM php:8.2-cli

WORKDIR /app
COPY . /app

ENV PORT=8080

CMD php -S 0.0.0.0:$PORT index.php
