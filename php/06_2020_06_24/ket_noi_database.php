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
		// xay dung phuong thuc select
		public function select($sql){
			$this->connect();
			$this->result = $this->conn->query($sql);
		}
		// xay dung phuong thuc kiem tra va chuyen du lieu
		public function fetch(){
			if($this->result->num_rows >0){
				$row = $this ->result->fetch_assoc();
			}
		}
	}
 ?>