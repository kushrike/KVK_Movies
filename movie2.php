<html>
<head>
	<title>KVK-KABIR SINGH</title>
	<center>
	<a href="mainpage.php"><img src="kvkposter.jpg" width="850" height="350" title="HOME-KVK" alt="HOME-KVK"></a><br><br><br><br></center>
	<a href='del.php'><img src='cancel2.jpg' width='100' height='40' title='CANCEL BOOKING' alt='CANCEL BOOING' align='left'></a>
	<a href='logout.php'><img src='logouticon.jpg' width='100' height='40' title='LOGOUT' alt='LOGOUT' align='RIGHT'></a><br><br><br>
</head>
<body background="back2.jpg" text = "#00FF00">

	<?php
	session_start();
		if($_SESSION['ch']==1)
		{
			echo '<script src="app.js"></script>';
		}
		$user=$_POST['name'];
		$movie="kabir singh";
		mysql_connect("localhost","root","");
		mysql_select_db("data");
		$seats="SELECT * FROM array WHERE moviename='$movie'";
		$seatl=mysql_query($seats);
		$seatll=mysql_fetch_array($seatl);
		//$seatll=mysql_fetch_array($seat1);
		echo "<h1>";
		echo "Hello, ";
		echo $_SESSION['name'];
		echo "";
		echo "</h1>";
		echo "<center>";
		echo "<h2>Number of tickets left :";
		echo $seatll[1];
		echo "<br><br></h2>";
		echo "</center>";

		?>
	<center>
		<h1><marquee width = "50%">WATCH "KABIR SINGH" TONIGHT @ 9:30PM-KVK THEATERS</marquee><br></h1>
		
		<img src="kabirsinghposter.jpg" width="850" height="250" title="KABIR SINGH" alt="KABIR SINGH"><br>

		<br>
        <br>
        <br>
        <br>

		<h2>
		Price of 1 ticket : Rs.250/-<br><br>
        <form method = "POST" action = "movie2_backend.php">
        Select the number of Ticket(s) here:
		<input type="number" name = "numticket" size = "10" default="1"><br>
		<br>
		<input type="image" alt="PROCEED TO PAYMENT" src="proceeedpayment.jpg" width="200" height="50">
        </form>
        </h2>
	</center>
</body>

</html>