<?php 
	class Hello{
		public $a = 5;
		//khoi tao ham
		public function test1(){
			echo "<h1>Hàm không có giá trị truyền vào, không trả về</h1>";
		}
		public function test2($str){
			echo "<h1>$str</h1>";
		}
		public function test3(){
			return "<h1>Hàm có giá trị trả về</h1>";
		}
	}
	//muon truy cap vao cac ham, bien ben trong class thi phai khoi tao doi tuong de truy cap
	$h = new Hello();
	//truy cap vao ham ben trong class
	$h->test1();
	$h->test2("Hello world");
	echo $h->test3();
 ?>