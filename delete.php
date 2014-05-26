<?php
$id = $_REQUEST['id'];

mysql_connect("localhost","student2","111");
mysql_query("use students");
$query = "delete from students where id=$id";
echo "q=$query";
mysql_query($query);

?>
