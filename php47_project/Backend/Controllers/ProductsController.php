<?php 
	//load file ProductsModel.php
	include "Models/ProductsModel.php";
	//ten lop dat theo quy tac passcal
	class ProductsController extends ProductsModel{
		//ten ham dat theo quy tac camel
		public function read(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->totalRecord()/$recordPerPage);
			//goi ham ModelRead tu class ProductsModel de lay ket qua
			$listRecord = $this->ModelRead($recordPerPage);
			//load view
			include "Views/ProductsRead.php";
		}
		//update - GET
		public function update(){
			//is_numeric($_GET["id"]) = true neu la so, nguoc lai se tra ve false
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham getRecord tu model de lay mot ban ghi
			$record = $this->getRecord($id);
			//tao bien $action de the hien action cua form khi submit
			$action = "index.php?controller=products&action=updatePost&id=$id";
			//load view
			include "Views/ProductsCreateUpdate.php";
		}
		//update - POST
		public function updatePost(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang users
			//header("location:index.php?controller=products&action=read");
			echo "<script>location.href='index.php?controller=products&action=read';</script>";
		}
		//create - GET
		public function create(){
			//tao bien $action de the hien action cua form khi submit
			$action = "index.php?controller=products&action=createPost";
			//load view
			include "Views/ProductsCreateUpdate.php";
		}
		//create - POST
		public function createPost(){
			//goi ham modelUpdate de update ban ghi
			$this->modelCreate();
			echo "<script>location.href='index.php?controller=products&action=read';</script>";
		}
		//delete
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelDelete($id);
			echo "<script>location.href='index.php?controller=products&action=read';</script>";
		}
	}
 ?>