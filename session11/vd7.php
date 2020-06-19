<?php 
	/*
		Khoi lenh switch case
		switch(giatri){
			case "giatri1":
				code
			break;
			case "giatri2":
				code
			break;
			default:
				code
			break;
		}
	*/
	$so = 4;
	switch($so){
		case 1:
			echo "<h1>Một</h1>";
		break;
		case 2:
			echo "<h1>Hai</h1>";
		break;
		case 3:
			echo "<h1>Ba</h1>";
		break;
		default:
			echo "<h1>Số này không nằm trong khoảng từ 1 đến 3</h1>";
		break;
	}
 ?>