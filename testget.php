<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="testget.php" method="post">
		Họ và tên: <input type="text" name="hoTen"><br><br>
		Địa chỉ : <input type="text" name="diaChi"><br><br>
		<input type="submit" name="gui">
	</form>
	<?php
		echo ("ID được gửi là: ".$_GET['id']);
	?>
</body>
</html>