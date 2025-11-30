FROM php:8.2-apache

# Apache-қа біздің кодты көшіреміз
COPY src/ /var/www/html/

# Үндемеуші index.html-ды өшіріп тастаймыз, тек біздің код қалады
RUN rm -f /var/www/html/index.html
