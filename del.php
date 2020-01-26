<!DOCTYPE html>
<html>
<head>
	<title>CANCELLATION</title>
	<a href="login_page.php"><img src="loginicon.jpg" width="100" height="40" title="LOGIN" alt="LOGIN" align="LEFT"></a>
	<a href="logout.php"><img src="logouticon.jpg" width="100" height="40" title="LOGOUT" alt="LOGOUT" align="RIGHT"></a>
</head>
<body text="#00FF00" background="back2.jpg">
	<center><h2>
	<a href="mainpage.php"><img src="kvkposter.jpg" width="850" height="350" title="HOME-KVK" alt="HOME-KVK"></a><br><br>
	
	<form method="POST" action="delete.php">
	Enter your transaction id :<br>
	<input type = "text" name = "id" size = "30"><br><BR>
	Enter your username for verification :<br>
	<input type = "text" name = "username" size = "30"><br><BR>
	<input type="submit" value="REQUEST CANCELLATION">
	<input type="reset" value="RESET">

	<!-- <?php
	//mysql_connect("localhost","root","");
	//mysql_select_db("movie");



	?> -->
</h2>
</center>
</body>
</html>