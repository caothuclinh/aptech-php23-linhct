<?php 
	class database{
		private $conn = null;
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $data = 'aptechphp23_05';
		private $result = null;
		// xay dung phuong thuc
		private function connect(){
			$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->data);
			$this->conn->query('SET NAMESUFT8');
		}
	}
 ?>