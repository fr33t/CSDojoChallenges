FROM php:5-apache-jessie
LABEL Author="fb0sh <fb0sh@outlook.com>"

COPY flag.tar.gz /var/www/html/flag.tar.gz
COPY index.php /var/www/html/index.php
WORKDIR /var/www/html

# 启动 Apache 并保持前台运行
CMD ["apache2-foreground"]
