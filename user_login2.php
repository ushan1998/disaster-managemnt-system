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

session_start();
$sql="SELECT * FROM $tbl_name WHERE email='$myemail' and password='$mypassword'";
$result=mysqli_query($conn,$sql);
$role='';
if($count=mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		 $_SESSION['id']= $row["id"];
			$_SESSION['fname']= $row["fname"];
			$role= $row["user_role"];
	}
}
if($count==1){
	if($role=="admin"){
		header("Location: admin-index.php");
		die();
	}
	if($role=="user"){
		header("Location: user-index.php");
		die();
	}else{
		header("Location: user_login.php");
		die();
	}
}else {
	header("Location: user_login.php");
	die();
}
?>
