<?php
$id = $_REQUEST['id'];

mysql_connect("localhost","root","");
mysql_query("use funshop");
$query = "delete from funshop where id=$id";
echo "q=$query";
mysql_query($query);

?>
