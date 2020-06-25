<?php 
	include 'data.php';
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>them du lieu</title>
 	<style>
 		.tieude {
 			color: darkred;
 			text-align: center;
 			margin-bottom: 30px;
 		}
 		form{
 			width: 300px;
 			margin: 0px auto;
 			border: 1px solid gray;
 			padding: 10px;
 		}
 		small{
 			text-align: left;
 		}
 		input{
 			width: 70%;
			height: 30px;
			border-bottom: 2px solid darkred;
			margin-bottom: 5px;
 		}
 		div{
 			display: flex;
 			justify-content: space-between;
 		}
 	</style>
 </head>
 <body>
 	<h1 class="tieude">them thong tin nguoi dung</h1>
 	<p><a href="index.php">ve trang chu</a></p>
 	<form method="post">
 		<div>
 			<small>user:</small>
 			<input type="text" name="user" placeholder="enter your name">
 		</div>
 		<div>
 			<small>password:</small>
 			<input type="password" name="pass" placeholder="enter your password">
 		</div>
 		<div>
 			<small>email:</small>
 			<input type="email" name="email" placeholder="enter your email">
 		</div>
 		<div>
 			<input type="submit" name="submit" value="dang ky">
 		</div>
 	</form>
 	<?php 
 		if (isset($_POST['submit'])) {
 			# code...
 			$user = ($_POST['user']);
 			$pass = $_POST['pass'];
 			$email = $_POST['email'];
 			$sql = "INSERT INTO users(id_user,user,password,email) VALUES(null,'$user',md5('$pass'),'$email')";
 			mysqli_query($conn,$sql);
 			header("location:index.php");
 		}
 	?>
 </body>
 </html>