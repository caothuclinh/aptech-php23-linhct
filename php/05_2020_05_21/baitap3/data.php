<?php 
	class database{
		// khai bao cac thuoc tinh:
		private $conn = null;
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $data = 'demo';
		private $result = null;
		// xay dung phuong thuc:
		private function connect(){
			$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->data) or die("ket noi that bai");
			$this->conn->query('SET NAMES UTF8');

		}
		//phuong thuc select du lieu:
		public function select($sql){
			$this->connect();
			$this->result = $this->conn->query($sql);
		}
		public function fetch(){
			if($this->result->num_rows > 0){
				$rows = $this->result->fetch_assoc();
			}
			else{
				$rows = 0;
			}
			return $rows;
		}
		// end fetch
		// phuong thuc chung cho insert, update, delete
		public function command($sql){
			$this->connect();
			$this->conn->query($sql);
		}
	}
 ?>