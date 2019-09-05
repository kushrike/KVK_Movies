<?php

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if($name == "" || $email == "" || $password == "" || $phone == ""){
	echo "Fill all the fields first!!";
}
else{
    mysql_connect("localhost", "root", "");
	mysql_select_db("data");

	$query = "SELECT * FROM userInfo WHERE name = '$name' ";
	$result = mysql_query($query);
    $row = mysql_num_rows($result);
    
    if($row != 0){
        $message = "This username already exists....Please select a different username";
        echo "<script type='text/javascript'>alert('$message');</script>";
        //echo "This username already exists....Please select a different username";
        //go back to the previous page
    }
    else{
        $query1 = "SELECT * FROM userInfo WHERE name = '$name' AND email = '$email' ";
        $result1 = mysql_query($query1);
        $row1 = mysql_num_rows($result1);

        if($row != 0){
            echo "User already exist...Kindly change either the name or the email\n";
            //Dont want to change the page rather just show the message and do not submit the request
        }
        else{
            $query2 = "INSERT INTO userInfo (name, password, email, phone) VALUES ('$name', '$password', '$email', '$password') ";
            mysql_query($query2);
            echo "Your account has been created\n\n";
            echo "Enjoy the movie booking experience\n";
            header("location:login_page.php");
            
        }
    }
}

?>