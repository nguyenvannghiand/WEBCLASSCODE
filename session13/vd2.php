<?php 
	//khoi tao bien cookie co thoi gian ton tai la 15 giay
	setcookie("str","Hello world",time() + 100);
	setcookie("nam","2020",time() + 100);
	setcookie("lop","PHP",time() + 100);
 ?>
 <h1><?php echo $_COOKIE["str"]; ?></h1>
 <pre>
 	<?php print_r($_COOKIE); ?>
 </pre>