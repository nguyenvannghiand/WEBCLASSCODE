<?php 
	/*
		- Form: su dung de gui de lieu tu trang nay den trang khac thong qua viec submit form
		- Form co 2 trang thai
			- GET: <form method="get" action="trang can den">
				- Du lieu se duoc truyen len url theo cau truc
				tentrang.php?bien1=giatri1&bien2=giatri2...
				su dung doi tuong $_GET["bien"] de lay gia tri
			- POST: <form method="post" action="trang can den">
				- Du lieu se truyen ngam tu trang nay qua trang khac
				su dung doi tuong $_POST["bien"] de lay gia tri
			- Trong form co nut submit de thuc hien viec submit form
	*/
 ?>
 <fieldset style="width: 300px; margin:auto;">
 	<legend>Form POST</legend>
 	<!-- required: thuoc tinh nay bat buoc phai nhap thong tin -->
 	<form method="post" action="">
 		<input type="text" name="txt" required> 
 		<input type="submit" value="Thực hiện">
 	</form>
 	<!-- 
		Do doi tuong $_POST["txt"] chi ton tai khi trang o trang thai POST, neu trang o trang thai GET thi se bao loi.
 	 -->
 	<h1><?php echo @$_POST["txt"]; ?></h1>
 	<h1><?php echo isset($_POST["txt"]) ? $_POST["txt"] : ""; ?></h1>
 	<!-- 
		isset($_POST["txt"]) <=> isset($_POST["txt"]) == true
		!isset($_POST["txt"]) <=> isset($_POST["txt"]) == false
 	 -->
 </fieldset>