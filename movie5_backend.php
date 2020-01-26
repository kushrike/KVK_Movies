<html>
<head>
    <title>BOOK - KVK MOVIES</title>
</head>

<body background="back2.jpg" text="white">
    <center>
        <a href="mainpage.php"><img src="kvkposter.jpg" width="850" height="350" title="HOME-KVK" alt="HOME-KVK"></a><br><br><p></p><br><br><br><br>
    <?php 
    
        $numticket = $_POST['numticket'];
        if($numticket < 1){
	       echo "Please select valid number of tickets";
           mysql_connect("localhost","root","");
           mysql_select_db("data");
           $query="INSERT INTO movie (moviename) VALUES ('aladdin')";
           mysql_query($query);
           echo "<script type=\"text/javascript\">window.alert('Enter Valid No. of Seats ASSHOLE!');</script>";

           header("location:movie5.php");

        }
        else{
	        echo "Your total booking price is:";
            echo $numticket*250;
            echo "<br>";
            echo "BOOKING CONFIRMED!";
            $query2="";
        }
        ?>
        
                
            <form method="POST" action="mainpage.php">
                <h3>Enter your account number<br>
                <input type = "text" name = "accnum" size = "30"><br>
                Enter your pin<br>
                <input type = "password" name = "pin" size = "10"><br><br><br>
                <input type = "submit" value = "Confirm payment"><br></h3>
            </form>
            
            </center>
        

    
</body>

</html>