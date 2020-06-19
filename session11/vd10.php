<?php 
	/*
		- Vong lap while
			while(dieu kien ket thuc vong lap){
				code
			}
			while(dieu kien ket thuc vong lap):
				code
			endwhile;
		- Vong lap do while
			do{
				code
			}while(dieu kien ket thuc vong lap);
	*/
	$n = 0;
	while($n <= 5){
		$n++;
		echo "<h1>$n</h1>";
	}
	echo "------------";
	do{
		$n++;
		echo "<h1>$n</h1>";
	}while($n <= 10);
 ?>