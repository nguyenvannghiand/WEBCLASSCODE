<?php 
	/*
		- Ham trong php
			- Cu phap: function tenham(){}
			- Goi ham: tenham();
			- Cac kieu ham:
				- Ham khong co tham so truyen vao, khong co gia tri tra ve
					VD: function tenham(){}
				- Ham co tham so truyen vao, khong co gia tri tra ve
					VD: function tenham(thamso1,thamso2...){}
				- Ham co tham so truyen vao, co gia tri tra ve
					VD: function tenham(thamso1,thamso2...){
						return giatritrave;
					}
	*/
	//ham khong co tham so truyen vao
	function test1(){
		echo "<h1>Ham khong co tham so truyen vao, khong tra ve</h1>";
	}
	//ham co tham so truyen vao
	function test2($giatri1,$giatri2){
		echo "<h1>$giatri1 $giatri2</h1>";
	}
	//ham co gia tri tra ve
	function test3(){
		return "<h1>Hello world</h1>";
	}
	//goi ham
	test1();
	test2("Hello"," 2020 ");
	echo test3();
 ?>