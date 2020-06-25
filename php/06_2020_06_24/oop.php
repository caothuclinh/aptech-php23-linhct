<?php 	
	class tinhtong{
		public $a;
		public $b;
		public $tong;
		// xay dung phuong thuc
		public function setA($a)
		{
		    $this->a = $a;
		}
		public function setB($b){
			$this->b = $b;
		}
		public function getA()
		{
		    return $this->a;
		}
		public function getB(){
			return $this->b;
		}
	}
	$soA = new tinhtong();
	$soB = new tinhtong();
	$soA->setA(7);
	$soB->setB(8);
	$tong = $soA->getA() + $soB->getB();
	echo "tong cua so a va b la: " . $tong;

 ?>