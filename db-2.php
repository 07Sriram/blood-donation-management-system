<?php 

$conn = mysqli_connect("localhost","root","","logtry");
if($conn){
	echo "connected";
}
else{
	echo "not connected";
}

?>