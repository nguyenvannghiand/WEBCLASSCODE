<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>danh sach sinh vien</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 500px; margin:auto;">
	<legend>Danh sach sinh vien</legend>
	<div style="margin-bottom: 5px;">
		<a href="form-sinhvien.php?action=add">Thêm sinh viên</a>
	</div>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
		<tr>
			<th>Họ tên</th><th>Email</th><th style="width: 100px;"></th>
		</tr>
		<?php if(isset($_SESSION["sv"])): ?>
			<?php foreach($_SESSION["sv"] as $rows): ?>
		<tr>
			<td><?php echo $rows["hoten"]; ?></td>
			<td><?php echo $rows["email"]; ?></td>
			<td style="text-align: center;">
				<a href="form-sinhvien.php?action=edit&email=<?php echo $rows['email']; ?>">Edit</a>
				&nbsp;&nbsp;
				<a href="form-sinhvien.php?action=delete&email=<?php echo $rows['email']; ?>">Delete</a>
			</td>
		</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</table>
</fieldset>
</body>
</html>