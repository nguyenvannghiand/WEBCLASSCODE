<?php 
	$sv = array("hoten"=>"Nguyễn Văn A","email"=>"nva@mail.com","namsinh"=>1990);
 ?>
 <h1>Họ tên: <?php echo $sv["hoten"]; ?></h1>
 <h1>Email: <?php echo $sv["email"]; ?></h1>
 <h1>Năm sinh: <?php echo $sv["namsinh"]; ?></h1>
 <pre><?php print_r($sv); ?></pre>
 <?php foreach($sv as $key=>$value): ?>
 	<h1>Key: <?php echo $key; ?>, Value: <?php echo $value; ?></h1>
 <?php endforeach;  ?>