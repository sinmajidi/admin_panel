<?php

include_once('connection.php');
$admminname=$_POST["email"];
$password=$_POST["psw"];
$tbl_name = "login_information";
echo $admminname." ".$password."<br>";
$sql = "SELECT email, pass FROM $tbl_name";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // you can see the rows by----> 
         echo "email: " . $row["email"]. "<br>"." pass " . $row["pass"]. "<br>";
         
        if(" ".$admminname==$row["email"])
        {
            header("Location:adminpage.php");
        }
        else
        {
            echo "it's not ok"."<br>";
        }
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>