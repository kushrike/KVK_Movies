<!DOCTYPE html>
<html>
<head>
	<title>Confirm Cancellation </title>
	<a href="login_page.php"><img src="loginicon.jpg" width="100" height="40" title="LOGIN" alt="LOGIN" align="LEFT"></a>
	<a href="logout.php"><img src="logouticon.jpg" width="100" height="40" title="LOGOUT" alt="LOGOUT" align="RIGHT"></a>
</head>
<body background="back2.jpg" text="#00FF00">
	<h1>
	<center>
	<a href="mainpage.php"><img src="kvkposter.jpg" width="850" height="350" title="HOME-KVK" alt="HOME-KVK"></a><br><br><br><br>

	
	<?php
		$username = $_POST['username'];
		$uid = $_POST['id'];

		if($username == "" || $uid == ""){
			echo "fill all the fields first";
		}
		else{
			mysql_connect("localhost", "root", "");
			mysql_select_db("data");
			$uid = $uid;
			$query="SELECT * FROM movie WHERE username='$username' AND uid='$uid'";
			$result = mysql_query($query);
			$row=mysql_fetch_array($result);
			$uidrow=$row[0];
			echo"<table border='3'>";
			echo"<tr>";
			echo"<td>".'Booking ID'."</td>";
			echo"<td>".'Movie Name'."</td>";
			echo"<td>".'Total Bill'."</td>";
			echo"<td>".'Seats Booked'."</td>";
			echo"<td>".'Booking Name'."</td>";
			echo"</tr>";
			echo"<tr>";
			echo"<td>".$uidrow."</td>";
			echo"<td>".$row[1]."</td>";
			echo"<td>Rs.".$row[2]."/-</td>";
			echo"<td>".$row[5]."</td>";
			echo"<td>".$row[6]."</td>";
			echo"</tr>";
			echo"</table>";

			if(!mysql_num_rows($result)){
				echo "No transaction for this UID can be found for your username";
			}
			else{
				echo '<form method="POST" action="del2.php"><Input type="submit" value="Confirm Cancellation"></form>';
				//$query1 = "DELETE * FROM movie WHERE username='$username' and uid='$uid'";
				//mysql_query($query1);
				//echo "YOUR MONEY WILL BE REFUNDED SHORTLY";
			}
		}
	?>
</h1>
</center>
</body>
</html>