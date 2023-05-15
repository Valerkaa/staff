# Використовуємо базовий образ з встановленим PHP
FROM php:8.0-apache

# Копіюємо файли додатку в контейнер
COPY . /var/www/html/

# Встановлюємо залежності PHP
RUN docker-php-ext-install mysqli pdo_mysql

# Вказуємо робочу директорію
WORKDIR /var/www/html/

# Встановлюємо права доступу до директорії
RUN chown -R www-data:www-data /var/www/html/

# Відкриваємо потрібний порт
EXPOSE 80

# Запускаємо сервер Apache
CMD ["apache2-foreground"]