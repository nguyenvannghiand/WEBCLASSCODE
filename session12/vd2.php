<fieldset style="width: 300px; margin:auto;">
	<legend>Trạng thái trang: <?php echo $_SERVER["REQUEST_METHOD"]; ?></legend>
	<!-- neu trong the form khong co thuoc tinh method thi mac dinh form se gui du lieu theo kieu GET -->
	<!-- neu trong thuoc tinh action khong ghi ten trang can submit den thi trang nay se submit lai chinh no sau khi an submit -->
	<!-- Trong the form: thuoc tinh onsubmit="return true" thi form moi submit duoc, con neu onsubmit="return false" thi form khong submit -->
	<!-- <form method="post" action="" onsubmit="return true;"> -->
		<script type="text/javascript">
			function checkForm(){
				return true;
			}
		</script>
		<form method="post" action="" onsubmit="return checkForm();">
		<!-- thuoc tinh required: bat buoc phai nhap thong tin thi moi submit duoc -->
		<!-- thuoc tinh placeholder de ghi chu thich cho o textbox -->
		<input type="text" name="txt" required placeholder="Nhap noi dung"> 
		<!-- phai co nut nay thi form moi submit duoc -->
		<input type="submit" value="submit">
	</form>
</fieldset>
<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$txt = $_POST["txt"];
		echo "<h1 style='text-align:center;'>$txt</h1>";
	}
 ?>