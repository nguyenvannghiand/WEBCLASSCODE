<!DOCTYPE html>
<html>
<head>
	<title>vd2</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	/*		
		- Quy tac dat ten bien
			- Co tu khoa $ o dau ten bien
			- So khong duoc dung dau bien
			- Bien khong duoc co khoang trang
			- Bien khong duoc co ky tu dac biet. VD: !@#$%^&*()
		- Cac kieu bien
			- int, float, string, object, array, datetime...
		- Chu y: ket qua cuoi cung se quy dinh kieu gia tri cua bien
	*/
	$a = "Hello"; //string
	$b = 5; //integer
	$c = 4.5;//float
	$d = array();//array
	//$a + $b -> ket qua se la phep noi chuoi
	//$b + $c -> ket qua se la kieu float
	//$c + $c -> object
	echo $a . $b;
	echo "<br>";
	echo  $b + $c;
	echo "<br>";
	echo $c + $d;//loi do so khong cong duoc voi kieu object
 ?>
</body>
</html>