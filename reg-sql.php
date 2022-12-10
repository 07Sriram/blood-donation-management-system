<?php

include 'db-2.php'; 
$un = $_POST['username'];
$pwd = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT into register(username,password,email) values('$un','$pwd','$email')";

$result = mysqli_query($conn,$sql);

if ($result) {
	header("location:login.php");
	exit();
}
else{
	echo "error";
}

?>