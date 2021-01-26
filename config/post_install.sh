#! /usr/bin/env bash

echo "######################## BDD #######################"
DBNAME=shc_bdd
DBUSER=homestead
DBPASSWD=secret
mysql -u$DBUSER -p$DBPASSWD -e "CREATE DATABASE $DBNAME CHARACTER SET utf8 COLLATE utf8_general_ci"

echo "######################## MIGRATION #######################"
cd /home/vagrant/www/
composer update
php artisan migrate
php artisan db:seed
sudo cp /home/vagrant/config/000-default.conf /etc/apache2/sites-enabled/000-default.conf
sudo a2enmod rewrite
sudo /etc/init.d/apache2 restart
