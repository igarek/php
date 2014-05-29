<?php
$name = $_REQUEST['name'];
$brand = $_REQUEST['brand'];
$producer = $_REQUEST['producer'];
$quantity = $_REQUEST['quantity'];
$cost = $_REQUEST['cost'];
$whom = $_REQUEST['whom'];
echo "<p>name=$name</p>";
echo "<p>brand=$brand</p>";
echo "<p>producer=$producer</p>";
echo "<p>quantity=$quantity</p>";
echo "<p>cost=$cost</p>";
echo "<p>whom=$whom</p>";

mysql_connect("localhost","root","");
mysql_query("use students");
$query = "insert into students (name,brand,producer,quantity,cost,whom) 
	values ('$name', '$brand','$producer','$quantity','$cost','$whom');";
echo $query;
mysql_query($query);
?>
