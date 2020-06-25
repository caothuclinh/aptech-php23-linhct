<?php 
	include 'top.php';
 ?>
 <form action="" method="post">
 	<div>Ten sinh vien: <input type="text" name="ten"></div>
 	<div>ngay sinh: <input type="text" name="ngs"></div>
 	<div>noi sinh: <input type="text" name="ns"></div>
 	<div><input type="submit" name="update" value="update"></div>
 </form>
 <?php 
 	if(isset($_POST['update'])){
 		$tenSV = $_POST['ten'];
 		$noisinh = $_POST['ns'];
 		$ngaysinh = $_POST['ngs'];
 		$maSV = $_GET['id'];
 		$dt->command("UPDATE sinhvien SET hoTen = '$tenSV', noiSinh = '$noisinh',ngaySinh = '$ngaysinh' WHERE maSinhVien = '$maSV'");
 		header('location:lop.php');
 	}
  ?>