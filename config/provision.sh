#! /usr/bin/env bash

DBNAME=api_shc
DBUSER=root
DBPASSWD=root

sudo mkdir /home/vagrant/www
sudo apt-get install -y curl apache2
sudo apt-get install -y apt-transport-https lsb-release ca-certificates
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list
sudo apt-get update
sudo apt-get install -y php7.2-cli
sudo apt-get install -y php7.2 php7.2-opcache libapache2-mod-php7.2 php7.2-mysql php7.2-curl php7.2-json php7.2-gd  php7.2-intl php7.2-mbstring php7.2-xml php7.2-zip php7.2-fpm php7.2-readline
sudo apt-get install -y php-curl php-mysql php-mbstring php-common php-xml php-zip
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password $DBPASSWD"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $DBPASSWD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean true"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/app-password-confirm password $DBPASSWD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/admin-pass password $DBPASSWD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/app-pass password $DBPASSWD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect none"
sudo apt-get install -y mysql-server phpmyadmin

mysql -uroot -p$DBPASSWD -e "CREATE DATABASE $DBNAME CHARACTER SET utf8 COLLATE utf8_general_ci"
mysql -uroot -p$DBPASSWD -e "grant all privileges on $DBNAME.* to '$DBUSER'@'localhost' identified by '$DBPASSWD'"

