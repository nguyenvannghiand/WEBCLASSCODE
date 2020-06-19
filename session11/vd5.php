<?php 
	/*
		- phep so sanh: ket qua chi tra ve true hoac false
			- Lon hon >
			- Lon hon hoac bang >=
			- Nho hon <
			- Nho hon hoac bang <=
			- So sanh bang nhau ==
			- So sanh khac nhau !=
		- Ket hop cac phep so sanh
			- Toan tu && (va): tat ca tra ve true thi ket qua cuoi cung moi tra ve true
				VD: 
					true && true && false -> false
					true && true && true -> true
			- Toan hoc tu || (hoac): chi can mot phep so sanh tra ve true thi ket qua cuoi cung se tra ve true
				VD: 
					true || true || false -> true
					true || true || true -> true
					false || false || false -> false
	*/
	echo 3 > 5;//neu ket qua tra ve false thi se khong hien thi text false len man hinh -> khong hien thi gi
	echo 3 < 5;
	echo "<br>";
	echo 3 < 5 && 4 == 4 && 1 == 1;
	/*
		3 < 5 -> true
		4 == 4 -> true
		1 == 1 -> true
		true && true && true -> true
	*/
 ?>