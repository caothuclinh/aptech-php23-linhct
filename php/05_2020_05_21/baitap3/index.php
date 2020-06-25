<?php 
	include 'top.php';
 ?>
 <?php 
 $dt ->select('SELECT * FROM sinhvien');
 $i =0;
 while ($r = $dt->fetch()) {
 	$i ++;
 	echo "$i." . $r['hoTen'] ."<br>";
 	# code...
 }
  ?>