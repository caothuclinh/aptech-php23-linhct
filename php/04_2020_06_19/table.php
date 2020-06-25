<?php 
include 'data.php';

	$create = "CREATE TABLE users (
		id_user INT(10) UNIQUE PRIMARY KEY AUTO_INCREMENT,
		user varchar(255) UNIQUE NOT NULL,
		password varchar(255) NOT NULL,
		email varchar(35) UNIQUE NOT NULL, 
		red_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";
	if (mysqli_query($conn, $create)) {
		# code...
		echo "thanh cong";
	}
	else{
		echo "Error creating table: " . mysqli_error($conn);
	}
 ?>