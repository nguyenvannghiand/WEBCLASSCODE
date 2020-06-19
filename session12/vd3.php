<!-- su dung javascrip de submit form -->
<script type="text/javascript">
	function submitForm(){
		//dat gia tri vao thuoc tinh action
		//document.getElementById("frm").setAttribute("action","http://dantri.com.vn");
		//tac dong vao the form co id=frm de thuc hien submit
		document.getElementById("frm").submit();
	}
</script>
<fieldset style="width: 350px; margin:auto;">
	<legend>Form</legend>
	<form id="frm" method="post" action="">
		<input type="text" name="txt">
		<a href="#" onclick="submitForm();">Click here to submit</a>
	</form>
</fieldset>
<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$txt = $_POST["txt"];
		echo "<h1 style='text-align:center;'>$txt</h1>";
	}
 ?>