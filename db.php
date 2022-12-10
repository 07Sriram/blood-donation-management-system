<?php 

$conn = mysqli_connect("localhost","root","","bbms");
if($conn){
	echo "connected";
}
else{
	echo "not connected";
}

?>