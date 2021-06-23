<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$mangktt=array(
    "Xử lý ảnh"  => "Đặng Thành Trung",
    "Ngôn ngữ hình thức" => "Nguyễn Thị Hồng",
    "Lập trình hướng đối tượng" => "Nguyễn Thị Hạnh",
    "giải tích"  => "Nguyễn Vân Anh",
    "Phương pháp nghiên cứu khoa học"  => "Nguyễn Thị Kim Ngân",
    "Trí tuệ nhân tạo"  => "Hồ Cẩm Hà",
    );
	echo "<pre>";
	print_r($mangktt);
	echo "</pre";
	foreach ($mangktt as $x => $y) {
		echo "môn <b>$x</b>";
	}
	?>
</body>
</html>