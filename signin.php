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

$fname =$_POST["inputuserfname"];
$lname =$_POST["insputlname"];
$age =$_POST["inputage"];
$position =$_POST["inputposition"];
$contact =$_POST["inputnumber"];
$mail =$_POST["insputemail"];
$role =$_POST["role"];
$password =$_POST["insputPassword"];



	$sql="INSERT INTO `users`(`fname`, `lname`, `age`, `position`, `contact_no`, `user_role`, `email`, `password`)
   VALUES ('$fname','$lname','$age','$position','$contact','$role','$mail','$password')";

	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:admin-index.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);


			?>
