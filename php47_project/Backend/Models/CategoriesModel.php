<?php
	class CategoriesModel{
		//doc tat ca cac ban ghi
		public function ModelRead($recordPerPage){
			//---
			//phan trang
			//tinh so trang
			//ham ceil la ham lay gia tri tran. vd: 2.3 = 3
			$numPage = ceil($this->totalRecord()/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc limit $from,$recordPerPage");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from categories");
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function getRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from categories where id=:id");
			$query->execute(array("id"=>$id));
			//lay mot ban ghi
			$record = $query->fetch();
			return $record;
		}
		//update ban ghi
		public function modelUpdate($id){
			//--
			$name = $_POST["name"];
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("update categories set name=:name where id=:id");
			$query->execute(array("id"=>$id,"name"=>$name));			
		}
		//create ban ghi
		public function modelCreate(){
			//--
			$name = $_POST["name"];
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("insert into categories set name=:name");
			$query->execute(array("name"=>$name));
		}
		//delete ban ghi
		public function modelDelete($id){
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("delete from categories where id=:id");
			$query->execute(array("id"=>$id));
		}
	}
 ?>