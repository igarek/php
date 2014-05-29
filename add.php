<html>
<head>
	<title>Add a new funshop data</title>
</head>
<body>
	<h1> funshop form </h1>
	<form method="post" action="add1.php">
		<p>
		<label> Name:
			<input type=text name="name">
		</label>
		<br>
		<label> Brand:
			<input type=text name="brand">
		</label>
		<br>
		<label> Producer of:
			<input type=text name="producer">
		</label>
		<br>
		<label> Quantit (for example: 3)
			<input type=text name="quantit">
		</label>
		<br>
		<label> Cost (for example: 1300)
			<input type=text name="birthday">
		</label>
		<br>
		<label> Whom
			<select name="sex">
				<option value="m">Male</option>
				<option value="f">Female</option>
			</select>
		</label>
		<input type=submit value="Add">
	</p>
	</form>
</html>
