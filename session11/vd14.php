<?php 
	/*
		- Trang thai cua trang
			- Khi go url thi trang se xuat hien -> khi do trang thai cua trang la GET
			- Khi an nut submit o tren trang -> trang submit den se o trang thai POST
			- Ham $_SERVER["REQUEST_METHOD"] se tra ve trang thai cua trang
	*/
 ?>
 <h1><?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>
 <form method="post" action="">
 	<input type="submit" value="Submit">
 </form>