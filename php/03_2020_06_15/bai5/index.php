<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>up load file</title>
</head>
<body>
	<h2>up file</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<div>
			<small>ten dang nhap: </small>
			<input type="file" name="upload">
			<input type="submit" name="submit" value="Upload du lieu">
		</div>
	</form>
	<?php 
		if(isset($_POST['submit'])){
			if($_FILES['upload']['error'] > 0){
				echo "<h2>co loi trong viec upload file</h2>";
			}
			else{
				move_uploaded_file($_FILES['upload']['tmp_name'], 'upload/'.$_FILES['upload']['name']);
				echo "<h2>upload thanh cong!</h2>";
				echo "<pre>";
				print_r($_FILES['upload']);
				echo "</pre>";
				$st = "upload/" . $_FILES['upload']['name'];
				echo "<br>";
				echo "<br><a href ='$st'>ve may tinh</a>";
			}
		}
	 ?>
</body>
</html>