- Form: de gui de lieu tu trang nay qua trang khac
	- Trong the form se co cac the form-control (text, select...)
	- Cau truc cua the form
		<form action="duong dan trang can submit den" method="post/get">
			cac the form control ben trong
		</form>
	- Lay du lieu theo kieu POST: $_POST["ten them form"]
	- Lay du lieu theo kieu GET: $_GET["ten them form"]
- Ham $_SERVER["REQUEST_METHOD"] se tra ve trang thai cua trang
	- Khi truy cap vao mot trang, mac dinh trang thai cua trang la GET
	- Khai an nut submit thi trang thai cua trang se submit den la POST
- Ham isset(doituong) se tra ve true neu doi tuong ton tai
- Array: mang trong php
	- Array bao gom 2 thanh phan
		- Key: chi so cua array. Key chay tu 0 den n
		- Value: la gia tri tuong ung phan tu thu key
	- Cac cac khai bao array
		- Cach 1:
			$bien = array();
			$bien[0] = giatri;
			$bien[1] = giatri;
			$bien[] = giatri; -> khi do key se tu tang len 1
			...
		- Cach 2: khai bao va gan gia tri
			$bien = array(giatri1, giatri2...)
			cung co the su dung cach 1 de them gia tri o day
		- Cach 3: co the dat ten cua key
			$bien = array(key1=>value1,key2=>value2...)
			
	- Mot so ham su dung
		- Duyet cac phan tu cua array
			foreach($bien as $chiso=>$giatri){}
			foreach($bien as $giatri){}
		- Hien thi cau truc cua array: print_r($bien);
		- Dem so luong phan tu trong array: count($bien)
		- Bien cac phan tu cua array thanh chuoi string: imploder(bien array, ky tu ghep vao sau moi phan tu)
		- Bien chuoi thanh cac phan tu cua array: exploder(bien string, ky tu can cat)