<?php 
	/*
		- Khoi lenh if
			if(ket qua phep so sanh tra ve true){
				code
			}else if(ket qua phep so sanh tra ve true){
				code
			}else{
				code
			}
			Chu y: cac khoi if, else if, else co the long nhau n cap
		--------------
		cach 2
			if(ket qua phep so sanh tra ve true):
				code
			elseif(ket qua phep so sanh tra ve true):
				code
			else:
				code
			endif;
	*/
	$a = 2;
	if($a >= 1 && $a <= 3){
		echo "<h1>$a nam trong khoang tu 1 den 3</h1>";
		if($a % 2 == 0)
			echo "<h1>$a la so chan</h1>";
	}
	else if($a >= 3 && $a <= 5)
		echo "<h1>$a nam trong khoang tu 3 den 5</h1>";
	else
		echo "<h1>$a > 5</h1>";
	//--------		
 ?>
<?php if($a >= 1 && $a <= 3): ?>
	<h1><?php echo $a ?> la so trong khoang tu 1 den 3</h1>
<?php elseif($a >= 3 && $a <= 5): ?>
	<h1><?php echo $a ?> la so trong khoang tu 3 den 5</h1>
<?php else: ?>
	<h1><?php echo $a ?> la so > 5</h1>
<?php endif; ?>	
