<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Danh sách loại sản phẩm</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css">
</head>
<?php 
//Khai báo đối tượng PDO
try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=ql_shop_quan_ao", 'root', '');
    $conn->query("set names utf8");
     
    // Thiết lập chế độ lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    // Thông báo thành công
   echo "Kết nối thành công";
} 
// Nhánh kết nối thất bại
catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}

?>
<body>
    
</body>
</html>