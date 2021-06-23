<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="testpost.php" method="post">
		Họ và tên: <input type="text" name="hoTen"><br><br>
		Địa chỉ : <input type="text" name="diaChi"><br><br>
		<input type="submit" name="gui">
	</form>
	<?php
		if(isset($_POST['gui'])){
			echo ("<br>Họ tên: ".$_POST['hoTen']);
			echo ("<br>Địa chỉ: ".$_POST['diaChi']);
			}
	?>
</body>
</html>