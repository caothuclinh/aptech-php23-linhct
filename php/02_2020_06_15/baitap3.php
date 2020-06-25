<?php
$sanpham = [
 	['iphone',3000,'my'],
 	['samsung',5000,'han quoc'],
 	['oppo',6000,'trung quoc'],
 	['vsmart',4000, 'viet nam']
 ];
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
		<?php for ($i=0; $i < count($sanpham); $i++):?> 
			<!--<?php //var_dump($sanpham[$i]);
				//echo "<br>";
			?>-->
			<tr>
				<td><?php echo "$i"+ 1; ?></td>
				<?php for($j=0; $j < count($sanpham[$i]); $j++):?>
					<td><?php echo $sanpham[$i][$j]; ?></td>
				<?php endfor ?>
			</tr>
		<?php endfor ?>
		
	</tbody>
 </table>