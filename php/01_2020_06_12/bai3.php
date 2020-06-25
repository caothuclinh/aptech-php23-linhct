<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>session va cookie</title>
</head>
<body>
	<h2>cookie</h2>
	<form method="post">
		<div>
			<small>ten dang nha: </small>
			<input type="text" name="user" placeholder="nhap vao ten">
		</div>
		<div>
			<small>mat khau: </small>
			<input type="password" name="pass">
		</div>
		<div><input type="submit" name="submit"></div>
	</form>
	<?php 
		if(isset($_POST['submit'])){
			setcookie('user',$_POST['user'],time()+15);
			setcookie('pass',$_POST['pass'],time()+15);
			header('location: showcookie.php');
		}
	 ?>
</body>
</html>