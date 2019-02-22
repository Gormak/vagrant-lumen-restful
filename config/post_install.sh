#! /usr/bin/env bash
echo "######################## MIGRATION #######################"
cd /home/vagrant/www/
php artisan migrate
php -S 192.168.55.55:8000 -t /home/vagrant/www/public