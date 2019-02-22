#! /usr/bin/env bash
echo "######################## MIGRATION #######################"
cd /home/vagrant/www/
composer update
php artisan migrate
php artisan db:seed
php -S 192.168.55.55:8000 -t /home/vagrant/www/public