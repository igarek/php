<?php
//These are mysql commands for user creation
//CREATE USER 'student2'@'localhost' IDENTIFIED BY '111';
//GRANT ALL PRIVILEGES ON * . * TO 'student2'@'localhost';

mysql_connect("localhost","student2","111");

mysql_query("drop database if exists students;");
mysql_query("create database students;");
mysql_query("use students;");
mysql_query("create table students(id int not null auto_increment primary key, 
	 name char(30), surname char(30), fathersname char(30), age int, 
	 birthday date, sex char (1));");
mysql_query("insert into students (name,surname,fathersname,age,birthday,sex) 
	values ('Maxim', 'Khomenko','Olegovich',19,'1994-09-19','m');");
mysql_query("insert into students (name,surname,fathersname,age,birthday,sex) 
	values ('Igor', 'Fedorishin','Evgenievich',20,'1994-03-30','m');");
mysql_query("insert into students (name,surname,fathersname,age,birthday,sex) 
	values ('Julia', 'Deyneka','Valeriyevna',20,'1994-04-10','f');");
echo "Ok.";
?>
