<?php 
include 'data.php';
$id_user = $_GET['id'];
 $sql = "SELECT * FROM users WHERE id_user = '$id_user'";
 $query = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($query);
  ?>
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
<h1 class="tieude">sua du lieu nguoi dung: <?=$row['user']?></h1>
<p><a href="index.php">ve trang chu</a></p>
<form method="post">
	<div>
		<small>user:</small>
		<input type="text" name="user" value="<?=$row['user']?>">
	</div>
	<div>
		<small>password:</small>
		<input type="password" name="pass" placeholder="enter your password">
	</div>
	<div>
		<small>new password:</small>
		<input type="password" name="pass1" placeholder="enter your new password">
	</div>
	<div>
		<small>email:</small>
		<input type="email" name="email" value="<?=$row['email']?>">
	</div>
	<div>
		<input type="submit" name="submit" value="dong y sua doi">
	</div>
</form>
<?php 
	if (isset($_POST['submit'])) {
		# code...
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$pass1 = $_POST['pass1'];
		$email = $_POST['email'];
		if (empty($pass)&&empty($pass1)) {
			# code...
			$pass1 = $row['password'];
			$sql = "UPDATE users SET user = '$user',password = '$pass1',email = '$email' WHERE id_user = '$id_user'";
				mysqli_query($conn,$sql);
				header('location:index.php');
				die();
		}
		else{
			$pass = md5($pass);
			if ($row['password'] == $pass) {
				if (empty($pass1)) {
					echo "<h3 class ='tieude'>mat khau khong duoc de trong</h3> ";
				}
				else{
					$sql = "UPDATE users SET user = '$user',password = md5('$pass1'),email = '$email' WHERE id_user = '$id_user'";
					mysqli_query($conn,$sql);
					header('location:index.php');
				}
			}
			else{
				echo md5($pass) . "<br>";
				echo "<h3 class ='tieude'>vui long nhap dung mat khau cu</h3> ";
			}
		}
		
	}
 ?>