<?php 
	/*
		- Pham vi cua bien
			- Bien cuc bo
				- Ton tai o ben ngoai ham hoac ben trong ham
				- Neu ton tai o ngoai ham thi khong dung duoc ben trong ham va nguoc lai
			- Bien toan cuc
				- Ton tai o ben ngoai ham hoac ben trong ham
				- Khai bao o ngoai ham thi dung duoc cho trong ham va nguoc lai
				- Cu phap: global $tenbien = giatri;
			- Bien cuc bo, bien toan cuc ton tai tren mot trang
			- Bien session: ton tai tren nhieu trang thuoc cung mot trinh duyet
	*/	
	function test1(){
		//khai bao a thanh bien toan cuc
		global $a;
		$a = 10;
	}
	$a = 5;
	test1();
	echo "<h1>$a</h1>";
 ?>