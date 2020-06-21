- Cookie ton tai phia client (trong thu muc cookie cua moi trinh duyet)
	- Khai bao cookie: setcookie("tenbien","giatri",thoigiantontai)
	- Thoigiantontai duoc tinh nhu sau
		- ham time() tra ve mot so nguyen tinh thoi gian hien tai
			- time() + sogiay = thoigiantontai
		VD: setcookie("tenbien","giatri",time()+60) -> cookie nay ton tai trong 60 giay, sau 60 giay cookie nay se tu dong xoa
	- Truy xuat bien cookie: $_COOKIE["tenbien"];
	- Hien thi tat ca cac cookie ton tai tren trinh duyet:
		print_r($_COOKIE)
	- Xoa cookie: cho thoigiantontai = thoi gian hien tai la cookie nay se tu dong xoa
- Pham vi cua bien
	- Bien cuc bo -> ton tai tren mot trang thuoc trinh duyet
	- Bien toan cuc	-> ton tai tren mot trang thuoc trinh duyet
	- Bien session: ban chat giong bien cuc bo hoac bien toan cuc. Khac: ton tai tren nhieu trang (nhieu tab) thuoc cung mot trinh duyet
		- session_id() se hien thi id cua bien session
			- moi lan khoi dong trinh duyet se co mot sesion id khac nhau
			- cac trinh duyet khac nhau se co session id khac nhau
		- Khai bao bien session: $_SESSION["tenbien"] = giaitri
		- Truy xuat bien session: $_SESSION["tenbien"]
		- Huy bien session: unset($_SESSION["tenbien"]);
		- Cac kieu du lieu cua bien session
			- kieu integer, float, string, boolean, object
			- kieu array: 
				$_SESSION["tenbien"] = array();
				$_SESSION["tenbien"] = array("giatri1","giatri2"...);
				$_SESSION["tenbien"] = array("key1"=>"value1","key2"=>"value2"...);
				- Truy xuat bien array
					$_SESSION["tenbien"][chiso] = giatri
					$_SESSION["tenbien"][tenkey] = giatri
			- Muon su dung duoc bien session tren nhieu trang thi truoc khi khoi tao bien phai start session bang ham session_start(). Neu khong co ham nay thi bien session chi tuong duong voi bien toan cuc, co nghia la bien nay chi ton tai tren mot trang