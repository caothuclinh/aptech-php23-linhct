<?php
	$ten = "Linh";
	echo "$ten <br>";
	var_dump("hello");
 	$nam = 2020;
 	echo "<br>";
 	$hv_lop = ['Linh','danh','ngoc','hai'];
 	echo "<pre>";
 	var_dump($hv_lop);
 	echo "</pre>";
 	$tensp = ['iphone','oppo','samsung','xiaomi','sony'];
 	$giasp = [3000,5600,6000,7000,3500];
 	$xuatxusp = ['My', 'trung quoc', 'han quoc', 'hong cong','thai lan'];
 ?>
 <style>
 	table{
 		margin-left: 30px;
 		margin-top: 30px;
 	}
 </style>
 <table cellpadding="2" border="1">
	<thead>
		<tr>
			<th>STT</th>
			<th>ten san pham</th>
			<th>gia san pham</th>
			<th>xuat xu san pham</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i = 0; $i < count($tensp); $i++):?>
		</tr>
			<td><?=$i+1;?></td>
			<td><?=$tensp[$i];?></td>
			<td><?=$giasp[$i];?></td>
			<td><?=$xuatxusp[$i];?></td>
		<tr>
		<?php endfor ?>
	</tbody>
 </table>