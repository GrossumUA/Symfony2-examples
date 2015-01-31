#!/bin/sh

SOURCE_PATH=/var/www/lessons.loc
DATABASE_NAME=lessons
DATABASE_TEST_NAME=lessons_test
HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`

echo "Database creation..."
mysql -uroot -proot -e "CREATE DATABASE ${DATABASE_NAME}"
mysql -uroot -proot -e "CREATE DATABASE ${DATABASE_TEST_NAME}"

echo "Downloading all needed PHP libraries... Please, set correct variables into parameters.yml or run 'composer install' and set them there."
cd ${SOURCE_PATH}
composer install

echo "Seting appropriate permissions to cache & logs folders"
rm -rf ${SOURCE_PATH}/app/cache/*
rm -rf ${SOURCE_PATH}/app/logs/*
apt-get install acl
setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX ${SOURCE_PATH}/app/cache ${SOURCE_PATH}/app/logs
setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX ${SOURCE_PATH}/app/cache ${SOURCE_PATH}/app/logs

