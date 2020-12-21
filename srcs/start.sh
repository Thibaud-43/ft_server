
mkdir /var/www/localhost
service mysql start
#NGINX
envsubst '${auto_index}' < ./tmp/default > ./tmp/default_with_index
rm 
mv ./tmp/default_with_index etc/nginx/sites-available/default

# MySQL

mysql -u root < ./tmp/initdb.sql

# phpMyAdmin

tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages /var/www/localhost/phpMyAdmin
mv ./tmp/config.inc.php ./var/www/localhost/phpMyAdmin

# wordpress

tar -zxvf latest-fr_FR.tar.gz
mv wordpress/ ./var/www/localhost/wordpress/
cp ./tmp/wp-config.php /var/www/localhost/wordpress/.

# clef ssl
mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=trouchon/CN=localhost"

# on configure les droits d'acces 

chown -R www-data /var/www/*
chmod -R 755 /var/www/*

# start des serveurs

service nginx start
service php7.3-fpm start
service mysql start
