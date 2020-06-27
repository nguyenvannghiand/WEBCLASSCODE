<?php 
	class SinhVien{
		//khai bao bien array
		public $hoten = array();
		//gan gia tri
		public function set($ht){
			$this->hoten[] = $ht;
		}
		//hien thi
		public function display(){
			foreach($this->hoten as $value){
				echo "<h1>$value</h1>";
			}
		}
	}
	$sv = new SinhVien();
	$sv->set("Nguyễn Văn A");
	$sv->set("Nguyễn Văn B");
	$sv->set("Nguyễn Văn C");
	$sv->set("Nguyễn Văn D");
	$sv->set("Nguyễn Văn E");
	$sv->display();
 ?>