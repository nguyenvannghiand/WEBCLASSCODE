<!DOCTYPE html>
<html>
<head>
	<title>them sinh vien</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 300px; margin:auto;">
	<legend>Thêm sinh viên</legend>
	<form method="post" action="vd14.php?action=addPost">
		<table cellpadding="5">
			<tr>
				<td>Họ tên</td>
				<td><input type="text" name="hoten" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Thêm sinh viên"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>