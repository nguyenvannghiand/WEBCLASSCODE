<?php 
	session_start();
	//khi khong session session thi bien session nay chi tuong duong voi bien toan cuc -> chi ton tai tren mot trang, khong ton tai duoc o trang khac thuoc cung trinh duyet
	$_SESSION["str"] = "Hello world";
 ?>
 <h1><?php echo $_SESSION["str"]; ?></h1>