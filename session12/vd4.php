<!--
	- Khi action cua the form la action="get" thi toan bo cac the form control ben trong the form se truyen het len url theo cau truc
		tentrang.php?bien1=giatri1&bien2=giatri2....
		- sau dau ? la danh sach cac bien
		- cac bien thuc hien theo cau truc: bien1=giatri1&bien2=giatri2... -> cac cap bien=giatri cach nhau boi dau &
-->
<fieldset style="width: 300px; margin:auto;">
	<legend>Form GET</legend>
	<!-- khong co thuoc tinh method thi mac dinh trang se submit theo kieu get -->
	<!-- khong co thuoc tinh action thi mac dinh trang se submit den trang hien tai -->
	<form>
		<table cellpadding="5">
			<tr>
				<td>Họ tên</td>
				<td><input type="text" required name="hoten"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Gửi dữ liệu"></td>
			</tr>
		</table>
	</form>
	<h1>Họ tên: <?php echo isset($_GET["hoten"]) ? $_GET["hoten"] : ""; ?></h1>
	<h1>Email: <?php echo isset($_GET["email"]) ? $_GET["email"] : ""; ?></h1>
</fieldset>