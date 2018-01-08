<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="dms"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

// username and password sent from form
$myemail=$_POST['email'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myemail = mysqli_real_escape_string($conn,$myemail);
$mypassword = mysqli_real_escape_string($conn,$mypassword);

$sql="SELECT * FROM $tbl_name WHERE email='$myemail' and password='$mypassword'";
$result=mysqli_query($conn,$sql);
$followingdata = $result->fetch_assoc();

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myemail and $mypassword, table row must be 1 row

if($count==1){
	if($followingdata["user_role"]=="admin")
	{
		header("Location: admin-index.php");
		die();
	}
	if($followingdata["user_role"]=="user")
	{
		header("Location: user-index.php");
		die();
	}
}
else {
	header("Location: user_login.php");
	die();
}
?>
