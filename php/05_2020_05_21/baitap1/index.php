<?php 
	require_once 'top.php';
	class Pheptoan{
		private $a;
		protected $b;
		public $c = 6;
		public $d = 10;
		public function setA($_A){
			$this->A = $_A;
		}
		public function setB($_B){
			$this->B = $_B;
		}
		public function getA(){
			return $this->A;
		}
		public function getB(){
			return $this->B;
		}
		public function Tong($x,$y){
			return $x+$y;
		}
	}
	$toan = new Pheptoan;
	$toan->setA(45);
	$toan->setB(33);
	echo $toan->getA() . " + " . $toan->getB() . " = " . $toan->Tong($toan->getA(),$toan->getB()); 
	require_once 'bottom.php';
 ?>