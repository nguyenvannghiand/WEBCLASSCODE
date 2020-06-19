<?php 
	//khai bao array
	$dienthoai = array();
	$dienthoai[0] = "IPhone";
	$dienthoai[1] = "Nokia";
	$dienthoai[] = "Samsung"; //-> khi do key se tu dong tang len 1
	$dienthoai[] = "LG"; //-> khi do key se tu dong tang len 1
	$dienthoai[] = "Oppo"; //-> khi do key se tu dong tang len 1
	// hien thi cau truc cua array
	echo "<pre>";
	print_r($dienthoai);
	echo "</pre>";
 ?>
 <fieldset style="width: 300px;">
 	<legend>Duyệt cách 1</legend>
 	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
 		<?php foreach($dienthoai as $key => $value): ?>
 		<tr>
 			<td>Key: <?php echo $key; ?> , Value: <?php echo $value; ?></td>
 		</tr>
 		<?php endforeach; ?>
 	</table>
 </fieldset>
 <fieldset style="width: 300px;">
 	<legend>Duyệt cách 2</legend>
 	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
 		<?php foreach($dienthoai as $value): ?>
 		<tr>
 			<td>Value: <?php echo $value; ?></td>
 		</tr>
 		<?php endforeach; ?>
 	</table>
 </fieldset>
