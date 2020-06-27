- SinhVien -> chi mot tap chung cac doi tuong sinh vien. Trong tap chung nay se co cac doi tuong cu the. Tap chung nay goi la class
	-> vay class la danh tu chi tap chung cac doi tuong
	- Class khai bao nhu sau
		class ten{
			khoi tao bien (thuoc tinh)
			khoi tao ham (phuong thuc)
		}
	- muon truy cap vao tap chung nay thi phai tao mot doi tuong cu the. Cau truc: $doituong = new tenClass();
- Mot so thanh phan trong class
	- Ham tao: la ham tu dong goi khi doi tuong duoc khoi tao
		public function __construct(){}
	- Ham huy: la ham tu dong goi truoc khi ket thuc class
		public function __destruct(){}
- Ke thua
	- Class B ke thua class A thi Class B co the su dung duoc cac ham, cac bien trong class A (tuy vao tam vuc cua bien)		
	- Cu phap
		class B extends A{}
	- Tam vuc cua bien
		- public
			- Tu doi tuong ngoai tac dong vao duoc
			- Tu class ke thua tac dong duoc
			- Trong chinh class do tac dong duoc
		- protected
			- Tu doi tuong ngoai khong duoc dong vao duoc
			- Tu class ke thua tac dong duoc
			- Trong chinh class do tac dong duoc
		- private
			- Tu doi tuong ngoai khong duoc dong vao duoc
			- Tu class ke thua khong tac dong duoc
			- Trong chinh class do tac dong duoc
- Load noi dung cua mot file khac vao file hien tai
	- include "tenfile.php"
	- include_once "tenfile.php"
	- require "tenfile.php"
	- require_once "tenfile.php"
- Khong duoc khai bao ten ham, ten class trung nhau
- Tu khoa namespace su dung de ngan cach cac class trung ten nhau	