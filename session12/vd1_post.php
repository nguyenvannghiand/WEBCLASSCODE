<h1>Trạng thái trang: <?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>
<!-- 
	- Doi tuong $_POST chi dung duoc khi trang o trang thai POST. Khi trang o trang thai GET neu dung doi tuong nay se bao loi
	- De kiem tra xem co bat duoc doi tuong $_POST hay khong -> su dung ham isset
		echo isset($_POST["hoten"]) ? $_POST["hoten"] : "";
		$_POST["hoten"] tuong doi voi $_POST["hoten"] == true
		!$_POST["hoten"] tuong duong voi $_POST["hoten"] == false
 -->
<h1>Họ tên: <?php echo isset($_POST["hoten"]) ? $_POST["hoten"] : ""; ?></h1>
<h1>Họ tên: <?php echo isset($_POST["gioitinh"]) ? $_POST["gioitinh"] : ""; ?></h1>
<h1>Họ tên: <?php echo isset($_POST["tinh"]) ? $_POST["tinh"] : ""; ?></h1>