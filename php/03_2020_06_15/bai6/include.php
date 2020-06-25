<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>include trong php</title>
</head>
<body>
	<?php include 'header.php'; $thongbao="day la trang include"?>
	<!-- thuc thi noi dung o day -->
	<h2><?=$thongbao?></h2>
	<!-- ket thuc noi dung thuc thi -->
	<?php include 'footer.php'; ?>
</body>
</html>