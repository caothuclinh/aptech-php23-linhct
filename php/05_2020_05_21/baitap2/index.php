<?php 
	include 'top.php';
 ?>
 <form action="" method="post">
 	a = <input type="text" name="a" size="5">
 	b = <input type="text" name="b" size="5">
 	c = <input type="text" name="c" size="5">
 	<input type="submit" name="giai" value="giai phuong trinh">
 </form><br><br>
<?php 
	class phuongtrinhbachai{
		protected $a = 1;
		protected $b = 3;
		protected $c = 2;
		private function delta(){
			return pow($this->b,2)-4*$this->a*$this->c;
		}
		protected function giai(){
			if($this->delta() < 0){
				echo "phuong trinh vo nghiem.";
			}
			else if($this->delta() == 0){
				echo "nghiem kep: x<sub>1</sub> = x<sub>2</sub> = " .-$this->b/(2*$this->a);
			}
			else{
				$x1 = (-$this->b-sqrt($this->delta()))/(2*$this->a);
				$x2 = (-$this->b+sqrt($this->delta()))/(2*$this->a);
				echo "phuong trinh co hai nghiem phan biet:<br>";
				echo "x<sub>1</sub> = $x1 x<sub>2</sub> = $x2";
			}
		}
	}
	class phuongtrinh extends phuongtrinhbachai{
		public function gpt(){
			return $this->giai();
		}
		public function setA($_A){
			$this->a = $_A;
		}
		public function setB($_B){
			$this->b = $_B;
		}
		public function setC($_C){
			$this->c = $_C;
		}	
	}
	$_G = new phuongtrinh;
	if(isset($_POST['giai'])){
		if (($_POST['a'] == "") || ($_POST['b'] == "") || ($_POST['c'] == "")) {
			# code...
			echo "hay nhap vao gia tri, va a phai khac 0";
		}
		else{
			if($_POST['a'] == 0){
				echo "a phai khac 0";
			}
			else{
				$_G->setA($_POST['a']);
				$_G->setB($_POST['b']);
				$_G->setC($_POST['c']);
				$_G->gpt(); 
			}
			
		}
		
	}
?>