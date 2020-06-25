<?php 
include 'top.php';
$dt->select('SELECT * FROM sinhvien');
	$i = 0;
?>
<style>
	div{
		width: 300px;
		margin-bottom: 5px;
	}
	div input{
		float: right;
	}
</style>
<table border="1" cellpadding="5">
	<?php while ($r = $dt->fetch()):?>
	<?php
		# code...
		$i++;
		$maSV = $r['maSinhVien'];
		$hoten = $r['hoTen'];
		$ngaysinh = $r['ngaySinh'];
		$dantoc = $r['danToc'];
		$noisinh = $r['noiSinh'];
	?>
		
			<tr>
			<td><?=$i?></td>
			<td><?=$maSV?></td>
			<td><?=$hoten?></td>
			<td><?=$ngaysinh?></td>
			<td><?=$dantoc?></td>
			<td><?=$noisinh?></td>
			<td><a href="update.php?id=<?=$maSV?>">update</a></td>
			<td><a href="lop.php?id=<?=$maSV?>">delete</a></td>
		</tr>
	<?php endwhile?>
</table>
<form action="" method="post">
	<div>ma sinh vien: <input type="text" name="msv" placeholder="nhap ma SV"></div>
	<div>Ten sinh vien: <input type="text" name="ht" placeholder="nhap ho ten"></div>
	<div>ngay sinh: <input type="text" name="ngs" placeholder="nhap ngay sinh"></div>
	<div>dan toc: <input type="text" name="dt" placeholder="nhap dan toc"></div>
	<div>noi sinh: <input type="text" name="ns" placeholder="nhap noi sinh"></div>
	<div><input type="submit" name="gui" value="insert"></div>
</form>
<?php 
	if (isset($_POST['gui'])) {
		# code...
		$maSV = $_POST['msv'];
		$hoten = $_POST['ht'];
		$ngaysinh = $_POST['ngs'];
		$dantoc = $_POST['dt'];
		$noisinh = $_POST['ns'];
		$dt->command("INSERT INTO sinhvien VALUE('$maSV','$hoten','$ngaysinh','$dantoc','$noisinh')");
		header('location:lop.php');
	}
	$dt = new database;
	if(isset($_GET['id'])){
		// echo "xoa id". $_GET['id'];
		$maSV = $_GET['id'];
		$dt->command("DELETE FROM sinhvien WHERE maSinhVien = '$maSV'");
		header('location:lop.php');
	}
 ?>