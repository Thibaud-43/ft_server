FROM debian:buster
MAINTAINER Trouchon <trouchon@student.42.fr>

RUN apt-get update && apt-get -y install wget && apt-get -y install vim
RUN apt-get -y install nginx
RUN apt-get install openssl
RUN apt-get install -y mariadb-server mariadb-client
RUN apt-get install -y php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap 
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN wget https://fr.wordpress.org/latest-fr_FR.tar.gz
RUN apt install -y php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip

ENV auto_index=on

COPY ./srcs/default ./tmp
COPY ./srcs/initdb.sql ./tmp
COPY ./srcs/config.inc.php ./tmp
COPY ./srcs/wp-config.php ./tmp
COPY ./srcs/start.sh .

CMD bash start.sh && bash
