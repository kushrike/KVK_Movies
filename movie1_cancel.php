<!DOCTYPE html>
<html>
<head>
	<title>CANCEL TICKET - KVK MOVIES</title>
</head>
<body>
	<?php
		mysql_connect("localhost", "root", "");
		mysql_select_db("movies");

		$query = "SELECT * FROM transactions WHERE name = '' ";//username of the customer
		$result = mysql_query($query);
		$row = mysql_num_rows($result);
	?>
</body>
</html>