<?php 
	$sv1 = array("hoten"=>"Nguyen Van A","email"=>"nva@mail.com");
	$sv2 = array("hoten"=>"Nguyen Van B","email"=>"nvb@mail.com");
	$sv3 = array("hoten"=>"Nguyen Van C","email"=>"nvc@mail.com");
	$sv4 = array("hoten"=>"Nguyen Van D","email"=>"nvd@mail.com");
	$sv5 = array("hoten"=>"Nguyen Van E","email"=>"nve@mail.com");
	//dinh nghia array trong array
	$sinhvien = array($sv1,$sv2,$sv3,$sv4,$sv5);
	echo "<pre>";
	print_r($sinhvien);
	echo "</pre>";
 ?>
 <fieldset style="width: 400px;">
 	<legend>Danh sách sinh viên</legend>
 	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
 		<tr>
 			<th>Họ tên</th><th>Email</th>
 		</tr>
 		<?php foreach($sinhvien as $rows): ?>
 		<tr>
 			<td><?php echo $rows["hoten"]; ?></td>
 			<td><?php echo $rows["email"]; ?></td>
 		</tr>
 		<?php endforeach; ?>
 	</table>
 </fieldset>