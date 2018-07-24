<?php

/*
Установить PHP расширение для MySQL
sudo apt-get install php-mysql

Установить расширение для отправки email
sudo apt-get install sendmail

Создать базу данных для сайта
CREATE DATABASE `site` CHARACTER SET utf8 COLLATE utf8_general_ci;
*/

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '123456';
$mysql_db = 'site';

# Создать необходимые таблицы в базе данных
$mysqli = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS users (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nickname varchar(255) NOT NULL UNIQUE,
	user_login varchar(255) NOT NULL UNIQUE,
	user_password varchar(255) NOT NULL,
	skype_contact varchar(255), 
	discard_contact varchar(255)
)"; # param BOOLEAN DEFAULT 0,
$mysqli->query($sql);
$mysqli->close();
