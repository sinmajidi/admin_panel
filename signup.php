<?php

include_once('connection.php');
$tbl_name = "login_information";

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	$adminname = test_input($_POST["username"]);
	$email = test_input($_POST["email"]);
	$password = test_input($_POST["psw"]);
	$password_repeat = test_input($_POST["psw-repeat"]);

if($password!=$password_repeat)
	{
	echo "<script language='javascript'>";
	echo "alert('the password and repeat password doesn't match!!!')";
	echo "</script>";
		
	}
	else
	{
	
$sql = "INSERT INTO  $tbl_name (adminname, email, pass)VALUES ('$adminname',' $email', '$password')";
if (mysqli_query($conn, $sql)) {
	echo "<script language='javascript'>";
	echo "alert('it's ok,sign in!!!')";
	echo "</script>";
	header("Location:login.php");
} else {
	echo "<script language='javascript'>";
	echo "alert('some thing went wrong')";
	echo "</script>";

}
}}	

mysqli_close($conn);
?>