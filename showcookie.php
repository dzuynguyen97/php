<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(isset($_SESSION["user"]) && isset($_SESSION["pass"])){
		echo "tên truy cập: ".$_SESSION["user"];
		echo "<br>Mật khẩu: ".$_SESSION["pass"];	
	}
	else 
	?>

</body>
</html>