<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$fathersname = $_REQUEST['fathersname'];
$age = $_REQUEST['age'];
$birthday = $_REQUEST['birthday'];
$sex = $_REQUEST['sex'];
echo "<p>name=$name</p>";
echo "<p>surname=$surname</p>";
echo "<p>fathersname=$fathersname</p>";
echo "<p>age=$age</p>";
echo "<p>birthday=$birthday</p>";
echo "<p>sex=$sex</p>";

mysql_connect("localhost","student2","111");
mysql_query("use students");
$query = "insert into students (name,surname,fathersname,age,birthday,sex) 
	values ('$name', '$surname','$fathersname','$age','$birthday','$sex');";
echo $query;
mysql_query($query);
?>
