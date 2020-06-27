<?php 
	class SinhVien{
		//ham tao se duoc tu dong goi dau tien
		public function __construct(){
			echo "<h1>Hàm tạo sẽ tự động gọi khi đối tượng được khởi tạo</h1>";
		}
		//ham huy se tu dong goi cuoi cung
		public function __destruct(){
			echo "<h1>Hàm hủy sẽ tự động gọi khi đối tượng được khởi tạo</h1>";
		}
		public function hello(){
			echo "<h1>Hello World</h1>";
		}
	}
	//khoi tao doi tuong thi ham tao se tu dong hien thi
	$sv = new SinhVien();
	$sv->hello();
 ?>