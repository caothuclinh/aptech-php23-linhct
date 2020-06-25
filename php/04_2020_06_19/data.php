<?php 
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "aptechphp23_04";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	  die("Connection failed: " . $conn->connect_error);
	}
	// $sql = "CREATE DATABASE aptechphp23_04";
	// if (!mysqli_query($conn,$sql)) {
	// 	# code...
	// 	print("da ton tai");
	// }
	// else{
	// 	print("thanh cong");
	// }

 ?>