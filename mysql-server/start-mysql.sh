#!/bin/bash
sudo docker run -d --name=mysql-server -e MYSQL_ROOT_PASSWORD=root --network=apache-mysql-net -p 33060:3306 mysql
