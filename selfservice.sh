#!/bin/bash

docker-compose up -d

apt install -y mariadb-client-core-10.0 > ab

mysql -uroot -proot -h127.0.0.1 database < "/METROM/Demo_Wordpress/backup/database.sql"
