<?php 
	/*
		- Phep toan tang giam 1 don vi
			- Tang truoc: ++bien <=> bien = bien + 1
			- Tang sau: bien++ <=> bien = bien + 1
			- Giam truoc: --bien <=> bien = bien - 1
			- Giam sau: bien--  <=> bien = bien - 1
	*/
	$a = 5;
	$b = 5;
	echo "<h1>". ++$a ."</h1>";//tang xong moi xuat gia tri ra trinh duyet
	//dau . la phep noi chuoi voi bien -> chuoi
	echo "<h1>". $b++ ."</h1>";//xuat gia tri ra trinh duyet xong moi tang
 ?>