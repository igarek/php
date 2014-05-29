<?php

mysql_connect("localhost","root","");
echo "<table border=2>\n";
echo "<tr><td>surname</td>
            <td>name</td>
            <td>fathersname</td>
            <td>age</td>
            <td>birthday</td>
            <td>sex</td>
            <td>edit</td>
            <td>delete</td>
            </tr>\n";
mysql_query("use students");
$r = mysql_query("select * from students");
$n = mysql_num_rows($r);
for ($i=0;$i<$n;$i++)
{
	$f = mysql_fetch_array($r);
	//var_dump($f);
    echo "<tr><td>".$f['surname']."</td>
            <td>".$f['name']."</td>
            <td>".$f['fathersname']."</td>
            <td>".$f['age']."</td>
            <td>".$f['birthday']."</td>
            <td>".$f['sex']."</td>
            <td><a href='edit.php?id=".$f['id']."'>edit</a></td>
            <td><a href='delete.php?id=".$f['id']."'>delete</a></td>
            </tr>\n";

}
