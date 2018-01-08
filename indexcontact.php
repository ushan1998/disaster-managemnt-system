<?php

var_dump($_POST);

$severname="localhost";
$username="root";
$password="";
$database="dms";

$conn=new mysqli($severname,$username,$password,$database);

if($conn->connect_error)
{
	die("connection failed :".$conn->connect_error);
}

$name = $_POST["publicname"];
$email = $_POST["publicemail"];
$msg = $_POST["publicmessage"];


	$sql="INSERT INTO `public_msg`(name`, `pemail`, `pmsg`) VALUES ('$name','$email','$msg')";

	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:Contact.php");
		} else {
  //  echo "connection not successfully created";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
			mysqli_close($conn);


			?>
