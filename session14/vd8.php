<?php 
	//co the su dung ten class truy cap truc tiep vao ten ham, ten bien theo cu phap TenClass::tenham(); TenClass::tenbien; -> bach cach them tu khoa static truoc ham, bien
	class Hello{
		public static function say(){
			echo "<h1>Hello world</h1>";
		}
	}
	Hello::say();
 ?>