<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>show cookie</title>
</head>
<body>
	<?php 
	if((isset($_COOKIE['user'])) && isset($_COOKIE['pass'])){
		echo "ten dang nhap la: " . $_COOKIE['user'];
		echo "password: " . $_COOKIE['pass'];
	}
	else{
		echo "COOKIE khong ton tai";
	}
 ?>
	<h2><a href="bai3.php">tro ve</a></h2>
	<h2><a href="deletecookie.php"> huy cookie</a></h2>
</body>
</html>

