<?php
$name = $_REQUEST['name'];
$brand = $_REQUEST['brand'];
$producer = $_REQUEST['producer'];
$quantity = $_REQUEST['quantity'];
$cost = $_REQUEST['cost'];
$whom = $_REQUEST['whom'];
$id = $_REQUEST['id'];
echo "<p>name=$name</p>";
echo "<p>brand=$brand</p>";
echo "<p>producer=$producer</p>";
echo "<p>quantity=$quantity</p>";
echo "<p>cost=$cost</p>";
echo "<p>whom=$whom</p>";

mysql_connect("localhost","root","");
mysql_query("use funshop");
$query = "update funshop set name='$name' where id=$id";
echo "q=$query";
mysql_query($query);
$query = "update funshop set brand='$brand' where id=$id";
mysql_query($query);

mysql_query("use funshop");
echo "q=$query";
$query = "update funshop set producer='$producer' where id=$id";
mysql_query($query);

mysql_query("use funshop");
$query = "update funshop set quantity='$quantity' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use funshop");
$query = "update funshop set cost='$cost' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use funshop");
$query = "update funshop set whom='$whom' where id=$id";
echo "q=$query";
mysql_query($query);

//$query = "update funshop set (name,brand,producer,quantity,cost,whom) 
//	values ('$name', '$brand','$producer','$quantity','$cost','$whom');";

?>
