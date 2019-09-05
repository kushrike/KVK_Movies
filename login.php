<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

if($name == "" || $password == "")
echo "Fill all the fields first!!";
else{
    mysql_connect("localhost","root","");
    mysql_select_db("data");

    $query = "SELECT * FROM userinfo WHERE name = '$name' AND password = '$password' ";
    $result = mysql_query($query);
    $row = mysql_num_rows($result);

    if($row == 0){
        $query1 = "SELECT * FROM userinfo WHERE name = '$name' ";
        $result1 = mysql_query($query1);
        $row1 = mysql_num_rows($result1);
        if($row1 == 0){
            echo "This user does not exist....Kindly signup first\n";
            echo "<a href = 'signup_page.php'>Signup here </a> ";
        }
        else{
            echo "Wrong password for the specified user name/n";
            echo "<a href = 'login_page.php'>Click here to try login again</a> \n";
            echo "<a href = 'signup_page.php'>Try signing up here!</a> ";
        }
    }
    else{
        $_SESSION['name'] = $name;
      //  echo "sds";
		header("location:mainpage.php");//main page with all the movies link
    }
}

?>