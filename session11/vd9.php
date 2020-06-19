<?php 
	/*
		- Vong lap for
			for(batdau; ketthuc; dieukien){
				code
			}
			for(batdau; ketthuc; dieukien):
				code
			endfor;
	*/
	for($i = 1; $i <= 5; $i++){
		if($i % 2 == 0)
			echo "<h1 style='background:green;'>$i</h1>";
		else
			echo "<h1 style='background:purple;'>$i</h1>";
	}
 ?>