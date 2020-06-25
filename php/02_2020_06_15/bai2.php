<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cau dieu kien if else</title>
</head>
<body>
	<h1>bai tap may tinh don gian bang php</h1>
	<form action="bai2.php" method="post">
		<div>
			<span>so A:</span>
			<input type="text" name="soA" placeholder="nhap so a">
		</div>
		<div>
			<span>so B:</span>
			<input type="text" name="soB" placeholder="nhap so B">
		</div>
		<div>
			<input type="submit" name="+">
			<input type="submit" name="-">
			<input type="submit" name="*">
			<input type="submit" name="/">
		</div>
	</form>
</body>
</html>
<?php 
if (isset($_POST['+']) and is_numeric($_POST['soA']) and is_numeric($_POST['soB'])) {
	$ketqua = $_POST['soA'] + $_POST['soB'];
	return $ketqua;
}
if (isset($_POST['-']) and is_numeric($_POST['soA']) and is_numeric($_POST['soB'])) {
	$ketqua = $_POST['soA'] - $_POST['soB'];
	return $ketqua;
}
if (isset($_POST['*']) and is_numeric($_POST['soA']) and is_numeric($_POST['soB'])) {
	$ketqua = $_POST['soA'] - $_POST['soB'];
	return $ketqua;
}
if (isset($_POST['/']) and is_numeric($_POST['soA']) and is_numeric($_POST['soB'])) {
	$ketqua = $_POST['soA'] - $_POST['soB'];
	return $ketqua;
}
else{
	$ketqua = "hien thi ket qua o day";
	return $ketqua;
}

?>