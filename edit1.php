<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$fathersname = $_REQUEST['fathersname'];
$age = $_REQUEST['age'];
$birthday = $_REQUEST['birthday'];
$sex = $_REQUEST['sex'];
$id = $_REQUEST['id'];
echo "<p>name=$name</p>";
echo "<p>surname=$surname</p>";
echo "<p>fathersname=$fathersname</p>";
echo "<p>age=$age</p>";
echo "<p>birthday=$birthday</p>";
echo "<p>sex=$sex</p>";

mysql_connect("localhost","student2","111");
mysql_query("use students");
$query = "update students set name='$name' where id=$id";
echo "q=$query";
mysql_query($query);
$query = "update students set surname='$surname' where id=$id";
mysql_query($query);

mysql_query("use students");
echo "q=$query";
$query = "update students set fathersname='$fathersname' where id=$id";
mysql_query($query);

mysql_query("use students");
$query = "update students set age='$age' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use students");
$query = "update students set birthday='$birthday' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use students");
$query = "update students set sex='$sex' where id=$id";
echo "q=$query";
mysql_query($query);

//$query = "update students set (name,surname,fathersname,age,birthday,sex) 
//	values ('$name', '$surname','$fathersname','$age','$birthday','$sex');";

?>
