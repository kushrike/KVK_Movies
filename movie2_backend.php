<html>
<head>
    <title>BOOK - KVK MOVIES</title>
</head>

<body background="back2.jpg" text="#00FF00">
    <h2>
    <center>
        <a href="mainpage.php"><img src="kvkposter.jpg" width="850" height="350" title="HOME-KVK" alt="HOME-KVK"></a><br><br><p></p><br><br><br><br>
    <?php 
        //$condition = false;
    session_start();
        $numticket = $_POST['numticket'];

        if($numticket < 1){
           //echo "<script type='text/javascript'>alert('$message');</script>";
           
           $_SESSION['ch']=1;
           header("location:movie1.php");
        }
        else
        {

           mysql_connect("localhost","root","");
           mysql_select_db("data");
            $cost=$numticket*250;
            $movie="kabir singh";
            $name=$_SESSION['name'];
            $_SESSION['movie']=$movie;
           $query="INSERT INTO movie (moviename,nseats,cost,username) VALUES ('$movie','$numticket','$cost','$name')";
           mysql_query($query);
           //$query1="SELECT min(leftseats) FROM movie WHERE username='$name' AND moviename='$movie'";
           $query1="SELECT * FROM array WHERE moviename='$movie'";
           $lefts=mysql_query($query1);
           //echo $lefts;
           $row=mysql_fetch_array($lefts);
           $leftseatsup=$row[1]-$numticket;
           $query22="UPDATE array SET leftseats='$leftseatsup' WHERE moviename='$movie'";
           mysql_query($query22);
           //$lefts=mysql_query($query1); 
           //$seatsleft=$lefts-$numticket;
           echo "Number of Seats Left : ";
           //echo "<br>";
           echo $leftseatsup;
           echo "<br>";
         echo "Your total booking price is:";
           echo $cost;
           echo "<br>";
            

        }
        ?>
        
                
            <form method="POST" action="congo.php">
                <h3>Enter your account number<br>
                <input type = "text" name = "accnum" size = "30"><br>
                Enter your pin<br>
                <input type = "password" name = "pin" size = "10"><br><br><br>
                <input type = "submit" value = "Confirm payment"><br></h3>
            </form>
            
            </center>
        

</h2>    
</body>

</html>