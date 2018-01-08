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

$author = $_POST["user_q_msg_author"];
$contact = $_POST["user_q_msg_contact"];
$email = $_POST["user_q_msg_email"];
$msg = $_POST["user_q_msg_msg"];


	$sql="INSERT INTO `user_msg`(`author`, `usercontact`, `email`, `msg`) VALUES ('$author','$contact','$email','$msg')";

	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:index.php");
		} else {
  //  echo "connection not successfully created";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
			mysqli_close($conn);


			?>
