<?php


mysql_connect("localhost","root","");

mysql_query("drop database if exists funshop;");
mysql_query("create database funshop;");
mysql_query("use funshop;");
mysql_query("create table funshop(id int not null auto_increment primary key, 
	 name char(30), brand char(30), producer char(30), quantity int, 
	 cost int, whom char (1));");
mysql_query("insert into funshop (name,brand,producer,quantity,cost,whom) 
	values ('4ashka', 'Premija','Ukraina',5,'120','f');");
mysql_query("insert into funshop (name,brand,producer,quantity,cost,whom) 
	values ('4asu', 'Rolix','shwejzarija',5,'1200','m');");
mysql_query("insert into funshop (name,brand,producer,quantity,cost,whom)  
	values ('Naushniki', 'Rau-Ban','USA',4,'3000','f,m');");
echo "Ok.";
?>
