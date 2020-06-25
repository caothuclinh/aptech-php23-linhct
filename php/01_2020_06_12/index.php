<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bai so 1</title>
	<style>
		.box{
			width: 500px;
			padding-left: 100px;
			line-height: 30px;
			height: auto;
			padding-bottom: 20px;
			border: 3px solid #5bc;
			margin: 0 auto;
			margin-bottom: 10px;
		}
		.box div{
			background: #dc8c8c;
			margin-bottom: 10px;
			border-bottom: 3px solid darkred;
		}
		p{
			color: white;
			font-size: 20px;
			display: inline;
			padding-left: 5px;
		}
		small{
			font-size: 15px;
		}
		.thongtin{
			color: black;
			display: block;
			line-height: 10px;
		}
	</style>
</head>
<body>
	<div class="box">
		<?php 
			$tuoi = 30;
			$diemtoan = "";
			$diemtoan = (int)$diemtoan;
			var_dump($tuoi);
			var_dump($diemtoan);
			echo "<hr>";
			$mangA = array("Cao Thuc Linh","Nguyen Van Hung","Trinh Viet Vuong","Pham Thi Ngoc","Duong Quang Lam");
			?>

			<?php foreach($mangA as $key => $value):?> 
				<div>
					<p>STT: <?=$key+1?></p>
					<p> ten: <?=$value?></p>
				</div>
			 <?php endforeach; ?>

		
	</div>
	<div class="box">
		<h2>form trong php</h2>
		<form action="index.php" method="get">
			<div>
				<small>ten: </small>
				<input type="text" placeholder="nhap ten" name="ten">
			</div>
			<div>
				<small>tuoi: </small>
				<input type="text" placeholder="nhap tuoi" name="tuoi">
			</div>
			<div>
				<small>nghe nghiep: </small>
				<input type="text" placeholder="nghe nghiep" name="nghe">
			</div>
			<input type="submit" name="submit" value="nhan vao day">
		</form>
		<?php if (isset($_GET['submit'])): ?>
			<?php 
				$ten = $_GET['ten'];
				$tuoi = $_GET['tuoi'];
				$nghe = $_GET['nghe'];
			 ?>
			 <p class="thongtin">ten: <?=$ten?></p>
			 <p class="thongtin">tuoi: <?=$tuoi?></p>
			 <p class="thongtin">nghe: <?=$nghe?></p>
		<?php endif ?>
	</div>
	
</body>
</html>
