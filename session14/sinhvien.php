<!DOCTYPE html>
<html>
<head>
	<title>danh sach sinh vien</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 500px; margin:auto;">
	<legend>Danh sách sinh viên</legend>
	<div style="margin-bottom: 5px;"><a href="vd14.php?action=add">Thêm sinh viên</a></div>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
		<tr>
			<th>Họ tên</th>
			<th>Email</th>
			<th style="width: 50px;"></th>
		</tr>
		<?php foreach($_SESSION["sv"] as $rows): ?>
		<tr>
			<td><?php echo $rows["hoten"]; ?></td>
			<td><?php echo $rows["email"]; ?></td>
			<td style="text-align: center;"><a href="vd14.php?action=delete&email=<?php echo $rows["email"]; ?>">Delete</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>
</body>
</html>