<?php
include_once('connection.php');
session_start();
$admminname=$_POST["email"];
$password=$_POST["psw"];
$tbl_name = "login_information";
$sql = "SELECT adminname,email, pass FROM $tbl_name";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // you can see the rows by----> 
        // echo "email: " . $row["email"]. "<br>"." pass " . $row["pass"]. "<br>";
        
        if(" ".$admminname==$row["email"] && $password==$row["pass"])
        {
            $cookie_name = "user";
            $cookie_value = $row["adminname"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
            header("Location:adminpage.php");
        }
        else
        {
            //echo "it's not ok"."<br>";
            //echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'login.php\';</script>';
            
             
            $_SESSION["error"] = "incorrect password!";
           // header("Location:login.php");
            
            
        }
    }
} else {
    echo "0 results";
}


mysqli_close($conn);



?>