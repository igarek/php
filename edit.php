<html>
<head>
	<title>Add a new funshop data</title>
</head>
<body>
	<h1> funshop form </h1>
	<form method="post" action="edit1.php">
		<?php
		mysql_connect("localhost","root","");
		mysql_query("use funshop");
		$id=$_REQUEST['id'];
		$f = mysql_query("select * from funshop where id=$id;");
		$r = mysql_fetch_array($f);
		?>
		<p>
		<label> First name:
			<input type=text name="name" value='<?php echo $r['name']?>'>
		</label>
		<br>
		<label> Father's name:
			<input type=text name="brand" value='<?php echo $r['brand']?>'>
		</label>
		<br>
		<label> Last name:
			<input type=text name="producer" value='<?php echo $r['producer']?>'>
		</label>
		<br>
		<label> quantity: (for example: 5)
			<input type=text name="quantity" value='<?php echo $r['quantity']?>'>
		</label>
		<br>
		<label> cost (for example: 3000)
			<input type=text name="cost" value='<?php echo $r['cost']?>'>
		</label>
		<br>
		<label> whom
			<select name="whom">
				<option <?php if ($r['whom']=='m') echo " selected "; ?> value="m">Male</option>
				<option <?php if ($r['whom']=='f') echo " selected "; ?> value="f">Female</option>
			</select>
		</label>
		<input type=hidden name="id" value='<?php echo $r['id'] ?>'>
		<input type=submit value="save">
	</p>
	</form>
</html>
