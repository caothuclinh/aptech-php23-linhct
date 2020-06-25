<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function torng php</title>
</head>
<body>
	<div class="box">
		<h2>function trong php</h2>
		<form action="function.php" method="post">
			<div>
				<small>nhap so thu nhat: </small>
				<input type="text" name="a" placeholder="nhap so thu nhat">
			</div>
			<div>
				<small>nhap so thu hai: </small>
				<input type="text" name="b" placeholder="nhap so thu hai">
			</div>
			<div><input type="submit" name="submit" value="nhan vao day"></div>
		</form>
		<?php 
		function kiemtra($a,$b){
			if((!empty($a)) && (!empty($b))){
				return true;
			}
			else{
				return false;
			}
		} 
		function kiemtraso($c,$d){
			if ((is_numeric($c)) && (is_numeric($d))) {
				# code...
				return true;
			}
			else{
				return false;
			}
		}
		function tong($e,$g){
			return $e + $g;
		}
		if(isset($_POST['submit'])){
			$x = $_POST['a'];
			$y = $_POST['b'];
			if (kiemtra($x,$y) && kiemtraso($x,$y)) {
				# code...
				$t = tong($x,$y);
				if ($y >=0) {
					# code...
					echo "ket qua la: $x + $y = $t";
				}
				else{
					echo "ket qua la: $x + ($y) = $t";

				}
			}
			else{
				echo "hay nhap vao hai so";
			}
		}
		?>
	</div>
</body>
</html>