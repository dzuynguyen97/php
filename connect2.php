<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Kết nối</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css">
</head>
<?php 
    $conn=mysqli_connect('localhost','root','','dienthoai') or die("Không thể kết nối tới cơ sở dữ liệu");
        if($conn){mysqli_query($conn,"SET NAMES 'utf8'");
          
        }else{
            echo "Bạn đã kết nối thất bại".mysqli_connect_erro();
        }
        

    
?>
<body>
    
</body>
</html>