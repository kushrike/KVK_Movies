<!DOCTYPE html>
<html>
<head>
	<title>BOOKING CONFIRMED!</title>
	<a href="logout.php"><img src="logouticon.jpg" width="100" height="40" title="LOGOUT" alt="LOGOUT" align="RIGHT"></a>

</head>
<center>
<body background="back2.jpg" text="#00FF00">
	<a href="mainpage.php"><img src="kvkposter.jpg" width="850" height="350" title="HOME-KVK" alt="HOME-KVK"></a><br><br>
	<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("data");
	$movie=$_SESSION['movie'];
	$name=$_SESSION['name'];
	$query="SELECT uid FROM movie WHERE username='$name' AND moviename='$movie' ";
	$row=mysql_query($query);
	$uid1=mysql_fetch_array($row);
	//$size = mysql_num_rows($uid1);
	//$uid=$uid1[$size-1];
	$uid=end($uid1);
	echo "<h1>";
	echo "CONGRATULATIONS ";
	echo $_SESSION['name'];
	echo ",<br>";
	echo " <marquee width = '50%'>YOUR BOOKING HAS BEEN CONFIRMED!</marquee><BR><BR>";
	echo "</h1><br><br>";
	echo "<h2>Your Unique ID for this booking is : ";
	echo $uid+17;
	echo "</h2>";
	echo "KINDLY RETAIN THIS FOR CANCELLATION PURPOSE.";
	?>

</center>
</body>
</html>