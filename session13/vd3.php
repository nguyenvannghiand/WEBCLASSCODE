<?php 
	setcookie("lop","PHP",time() + 900);
	//xoa bien cookie
	setcookie("lop","PHP",time());
 ?>
 <h1><?php echo $_COOKIE["lop"]; ?></h1>