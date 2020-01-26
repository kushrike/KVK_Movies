<!DOCTYPE html>
<html>
<head>
	<title>KVK MOBIE BOOKING</title>
	<center>
	<a href='del.php'><img src='cancel2.jpg' width='150' height='50' title='CANCEL BOOKING' alt='CANCEL BOOKING' align='RIGHT'></a><BR><BR><BR>
	<a href="mainpage.php"><img src="kvkposter.jpg" width="850" height="350" title="HOME-KVK" alt="HOME-KVK"></a><br><br></center>

	<a href="login_page.php"><img src="loginicon.jpg" width="100" height="40" title="LOGIN" alt="LOGIN" align="LEFT"></a>
	<a href="logout.php"><img src="logouticon.jpg" width="100" height="40" title="LOGOUT" alt="LOGOUT" align="RIGHT"></a>
	<CENTER><a href="signup_page.php"><img src="signupicon1.png" width="100" height="40" title="SIGNUP" alt="SIGNUP" align="MIDDLE"></a><br><br><br><br></CENTER>
	
</head>
<body background="back2.jpg" text="#00FF00">
	<center><H1>
		<marquee width = "50%">SELECT THE MOVIE YOU WANNA WATCH FROM THE LIST!</marquee>
		</H1>
		<?php
		session_start();
		if(isset($_SESSION['name']))
		{
		echo "<br>";
		echo "<a href='movie1.php'><img src='endgame1.jpg' width='1150' height='400' title='ENDGAME' alt='ENDGAME'></a><br>";
		echo "<a href='movie2.php'><img src='kabirsinghposter.jpg' width='1150' height='400' title='KABIR SINGH' alt='KABIR SINGH'></a><br>";
		echo "<a href='movie3.php'><img src='bharat.jpg' width='1150' height='400' title='BHARAT' alt='BHARAT'></a><br>";
		echo "<a href='movie4.php'><img src='godzilla-poster.jpg' width='1150' height='400' title='GODZILLA' alt='GODZILLA'></a><br>";
		echo "<a href='movie5.php'><img src='aladdin2.jpg' width='1150' height='400' title='ALLADIN' alt='ALLADIN'></a><br><p></p>";
		}
		if($_SESSION['lg']==1)
		{
			session_unset();
 			session_destroy();
			echo '<script src="logout1.js"></script>';
		}
		?>
		<a href="login_page.php"><img src="endgame1.jpg" width="1150" height="400" title="ENDGAME" alt="ENDGAME"></a><br>
		<a href="login_page.php"><img src="kabirsinghposter.jpg" width="1150" height="400" title="KABIR SINGH" alt="KABIR SINGH"></a><br>
		<a href="login_page.php"><img src="bharat.jpg" width="1150" height="400" title="BHARAT" alt="BHARAT"></a><br>
		<a href="login_page.php"><img src="godzilla-poster.jpg" width="1150" height="400" title="GODZILLA" alt="GODZILLA"></a><br>
		<a href="login_page.php"><img src="aladdin2.jpg" width="1150" height="400" title="ALLADIN" alt="ALLADIN"></a><br><p></p>
	</center>
</body>
</html>