<?php
session_start();
include 'db.php'; 
$nme = $_POST['name'];
$ph = $_POST['phno'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$bldgrp = $_POST['bloodgroup'];
$address = $_POST['address'];


$sql = "INSERT into becomedonar(name,phno,email,age,gender,bloodgroup,address) values('$nme','$ph','$email','$age','$gender','$bldgrp','$address')";

$result = mysqli_query($conn,$sql);

if ($result) {
	header("location:thankyou.php");
	exit();
}
else{
	echo "error";
}

?>