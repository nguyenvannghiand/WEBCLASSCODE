<?php 
	class A{
		public $biena1 = "<h1>Biến a1</h1>";
		public function hama1(){
			echo "<h1>Hàm a1</h1>";
			echo $this->bienb1;
		}
	}
	//khai bao class B ke thua class A
	//khi do class B co the tac dong duoc vao cac bien, ham trong clas A (tuy vao tam vuc cua bien)
	class B extends A{
		public $bienb1 = "<h1>Biến b1</h1>";
		public function __construct(){
			//xuat bien a1
			echo $this->biena1;
		}
	}
	//khoi tao doi tuong cua class B
	$obj = new B();
	$obj->hama1();
 ?>