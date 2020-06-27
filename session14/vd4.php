<?php 
	class SinhVien{
		public function __construct($hoten){
			echo "<h1>Hàm tạo tự động gọi</h1>";
			echo "<h1>$hoten</h1>";
		}
	}
	//co the goi thang class SinhVien ma khong can gan vao mot bien doi tuong
	new SinhVien("Nguyễn Văn A");
 ?>