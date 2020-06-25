<?php 
	$mang = array(9,1,3,4,6,8,5);
	//khai bao manng co 6 phan tu
	$sophantu = count($mang);
	// var_dump($sophantu);
	//sap xep mang
	for($i = 0; $i <($sophantu - 1); $i++)
	{
		for ($j=$i +1; $j < $sophantu ; $j++) { 
			# code...
			if ($mang[$i]>$mang[$j]) {
				# code...
				//hoan vi
				$tmp = $mang[$j];
				$mang[$j] = $mang[$i];
				$mang[$i] =$tmp;
			}
		}
	}
	//hien thi cac phan tu cu mang da sap xep
	for ($i=0; $i <$sophantu ; $i++) { 
		# code...
		echo "<pre>";
		echo "$mang[$i]";
		echo "</pre>";
	}

 ?>