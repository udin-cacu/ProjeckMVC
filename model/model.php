<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		public $table;
		function __construct(){
			$connect = mysqli_connect("localhost", "root", "","db_dosen")or die('$conn');
			
		}
		
		function execute($query){
			return 	$query = mysqli_query();
		}
		
		function selectAll(){
			$query = "select * from $this->table ";
			return $this->execute($query);
		}
		
		function select($filter){
			$query = "select * from $this->table where $filter";
			return $this->execute($query);
		}
		
		function update($ubah, $id){
			$query = "update $this->table set $ubah where $id ";
			

			return $this->execute($query);
		}
		
		function delete($id){
			$query = "delete from $this->table where $id";
			return $this->execute($query);
		}
		
		function insert($input){
			$query = "insert into $this->table values ($input)";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysql_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>