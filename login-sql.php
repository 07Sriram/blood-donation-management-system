<?php 
session_start();
include 'db-2.php';
$un = $_POST['username'];
$pwd = $_POST['password'];
$sql = "SELECT * from register where username = '$un' and password = '$pwd'";
$result = mysqli_query($conn,$sql);


$count = mysqli_num_rows($result);
if($count>0){
  header("location:index.php");
  $_SESSION['username'] = $un;
}
else{

  // echo '<script>alert("dont have account")</script>';
   header("location:register.php");
  // echo "dont have acoount";
}

// if ($result) {
// 	// code...
// 	header("location:home.php");
// 	$_SESSION['username'] = $un;
// }
// else{
// 	header("location:register.php");
// }

?>