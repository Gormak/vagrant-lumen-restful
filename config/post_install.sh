#! /usr/bin/env bash
echo "######################## MIGRATION #######################"
cd /home/vagrant-lumen-restful/www/
composer update
php artisan migrate
php artisan db:seed
sudo cp /home/vagrant/config/000-default.conf /etc/apache2/sites-enabled/000-default.conf
sudo a2enmod rewrite
sudo /etc/init.d/apache2 restart
