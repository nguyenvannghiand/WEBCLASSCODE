<?php 
	$str = "Hôm nay là thứ năm";
	//cat ky tu khoang trang, nem cac phan tu vao chuoi
	$arr = explode(" ", $str);//cat chuoi theo ky tu khoang trang -> nem vao arary
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
 ?>