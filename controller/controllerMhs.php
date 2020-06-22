<?php
	//include class model
	include "model/model.php";
	
	class controllerMhs{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
			$this->model->table="tb_dosen";
		}
		
		function index(){
			//kondisi untuk menampilkan halaman web yang diminta
			if(isset($_GET['e'])){ //kondisi untuk mengakses halaman edit
				$nid = $_GET['e'];
				$this->viewEdit($nid);
			}else if(isset($_GET['d'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
				$nid = $_GET['d'];
				$this->delete($nid);
			}else if(isset($_GET['i'])){
				$this->viewInsert(); //kondisi untuk mengakses halaman add
			}else{
				$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
				$data1= "view/mhs/view.php";
				include "view/index.php"; //memamnggil view.php pada folder view
			}

			
		}
		
		function viewEdit($nid){

			$data = $this->model->select(" nid = $nid "); //select data mahasiswa dengan nim ...
			$row = $this->model->fetch($data); //fetch hasil select
				$data1= "view/mhs/view_edit.php";
				include "view/index.php"; 
		}
		
		function viewInsert(){
				$data1= "view/mhs/view_add.php";
				include "view/index.php"; 

		}
		
		//fungsi updata data
		function update(){
			$nid = $_POST['nid'];
			$nama_dosen = $_POST['nama_dosen'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['telepon'];
			$kd_dosen = $_POST['kd_dosen'];
			$mk = $_POST['mk'];
				

			$update = $this->model->update(" nama_dosen='$nama_dosen', alamat='$alamat', telepon='$telepon', kd_dosen='$kd_dosen' ","nid=$nid");
			
			header("location:index.php");
		}
		
		function delete($nid){
			$delete = $this->model->delete("nid=$nid");
			header("location:index.php");
		}
		
		function insert(){
			$nid = $_POST['nid'];
			$nama_dosen = $_POST['nama_dosen'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['telepon'];
			$kd_dosen = $_POST['kd_dosen'];
			$mk = $_POST['mk'];

			$insert = $this->model->insert("'$nid', '$nama_dosen', '$alamat', '$telepon', '$kd_dosen','$mk'");
			header("location:index.php");
		}
		
		function __destruct(){
		}
	}
?>