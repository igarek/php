<?php

mysql_connect("localhost","root","");
echo "<table border=2>\n";
echo "<tr><td>name</td> 
            <td>brand</td> 
            <td>producer</td> 
            <td>quantity</td> 
            <td>cost</td> 
            <td>whom</td> 
            <td>edit</td>
            <td>delete</td>
            </tr>\n";
mysql_query("use funshop");
$r = mysql_query("select * from funshop");
$n = mysql_num_rows($r);
for ($i=0;$i<$n;$i++)
{
	$f = mysql_fetch_array($r);
	//var_dump($f);
    echo "<tr><td>".$f['name']."</td>
            <td>".$f['brand']."</td>
            <td>".$f['producer']."</td>
            <td>".$f['quantity']."</td>
            <td>".$f['cost']."</td>
            <td>".$f['whom']."</td>
            <td><a href='edit.php?id=".$f['id']."'>edit</a></td>
            <td><a href='delete.php?id=".$f['id']."'>delete</a></td>
            </tr>\n";

}
