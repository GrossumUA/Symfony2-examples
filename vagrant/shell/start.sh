#!/bin/sh
apt-get update -y
apt-get install git vim rsync curl -y

echo "Installing MySQL..."
echo "mysql-server mysql-server/root_password password root" | debconf-set-selections
echo "mysql-server mysql-server/root_password_again password root" | debconf-set-selections
apt-get install -y mysql-server mysql-client


echo "Installing PHP..."
apt-get install -y php5 php5-fpm php5-cli php5-common php5-intl php5-json php5-mysql php5-gd php5-imagick php5-curl php5-mcrypt php5-dev php5-xdebug
rm /etc/php5/fpm/php.ini
rm /etc/php5/cli/php.ini

cp /vagrant/vagrant/configs/php.ini /etc/php5/fpm/php.ini
cp /vagrant/vagrant/configs/php.ini /etc/php5/cli/php.ini
cp /vagrant/vagrant/configs/20-xdebug.ini /etc/php5/fpm/conf.d/

echo "Installing NGINX..."
apt-get install nginx -y
cp /vagrant/vagrant/configs/lessons.loc /etc/nginx/sites-available/lessons.loc
ln -s /etc/nginx/sites-available/lessons.loc /etc/nginx/sites-enabled/
service nginx restart

echo "Installing Composer..."
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

echo "Installing phpUnit..."
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
mv phpunit.phar /usr/local/bin/phpunit