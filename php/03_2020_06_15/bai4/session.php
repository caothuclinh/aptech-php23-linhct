<?php session_start(); ?>
<form method="POST">
	<div>
		<small>ten dang nhap: </small>
		<input type="text" name = "ten" placeholder="nhap vao ten">
	</div>
	<div>
		<small>Nhap mat khau: </small>
		<input type="text" name="pass">
	</div>
	<div>
		<input type="submit" name="submit" value="dang nhap">
	</div>
</form>
<?php 
	if (isset($_POST['ten']) && isset($_POST['pass'])) {
		# code...
		$_SESSION['ten'] = $_POST['ten'];
		$_SESSION['pass'] =$_POST['pass'];
		header("location: showsession.php");
	}
 ?>
