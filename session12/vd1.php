<!DOCTYPE html>
<html>
<head>
	<title>vd1</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 300px; margin:auto;">
	<legend>Trang thai trang: <?php echo $_SERVER["REQUEST_METHOD"]; ?></legend>
	<form method="post" action="vd1_post.php">
		<table cellpadding="5">
			<tr>
				<td>Họ tên</td>
				<td><input type="text" name="hoten" required></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" name="gioitinh" checked value="nam"> Nam 
					<input type="radio" name="gioitinh" value="nu"> Nữ
				</td>
			</tr>
			<tr>
				<td>Tỉnh</td>
				<td>
					<select name="tinh">
						<option value="Hà Nội">Hà Nội</option>
						<option value="Huế">Huế</option>
						<option value="TP HCM">TP HCM</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Gửi dữ liệu"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>