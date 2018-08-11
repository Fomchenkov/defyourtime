<?php

/*
Установить PHP расширение для MySQL
sudo apt-get install php-mysql

Установить расширение для отправки E-mail
sudo apt-get install sendmail

Создать базу данных для сайта
CREATE DATABASE `site` CHARACTER SET utf8 COLLATE utf8_general_ci;
*/

$mysql_host = 'localhost';
$mysql_user = 'root';  # 'cb59644_defyour';
$mysql_password = '123456';  # 'helloworld';
$mysql_db = 'site';  # 'cb59644_defyour';

// Создать необходимые таблицы в базе данных
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS users (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nickname varchar(255) NOT NULL UNIQUE,
	user_login varchar(255) NOT NULL UNIQUE,
	user_password varchar(255) NOT NULL,
	skype_contact varchar(255), 
	discard_contact varchar(255)
)";
$conn->query($sql);
$sql1 = "CREATE TABLE IF NOT EXISTS orders (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nickname varchar(255) NOT NULL,
	price int NOT NULL,
	title varchar(255) NOT NULL,
	product_id int NOT NULL,
	count_ int NOT NULL,
	user_name_ varchar(255),
	user_phone varchar(255),
	user_mail varchar(255), 
	user_comment varchar(255)
)";
$conn->query($sql1);
$sql2 = "CREATE TABLE IF NOT EXISTS links (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nickname varchar(255) NOT NULL,
	twitch varchar(255) NOT NULL,
	pic_url varchar(255) NOT NULL
)";
$conn->query($sql2);
$conn->close();
