FROM php:8.2-cli

WORKDIR /app
COPY . /app

# Render порт береді -> $PORT
ENV PORT=8080

CMD php -S 0.0.0.0:$PORT index.php
