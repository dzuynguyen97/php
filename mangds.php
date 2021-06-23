<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$mangktt=array(
    "Khuất Vân Lan"  => array("NS" => "4/5/1989", "Quê quán" => "Hà Nam" ),
    "Hồ Đức Minh" => array("NS" => "3/3/1990", "Quê quán" => "Ninh Bình" ),
    "Vũ Lan Ngọc" => array("NS" => "20/08/1991", "Quê quán" => "Thái Bình" ),
    "Nguyễn Anh Quân"  => array("NS" => "02/06/1990", "Quê quán" => "Cao Bằng" ),
    "Trần Văn Thịnh"  => array("NS" => "02/06/1992", "Quê quán" => "Hà Giang" ),
    "Nguyễn Ngọc Hoài"  => array("NS" => "02/06/1992", "Quê quán" => "Lạng Sơn" ),
    "Nguyễn Thu Lan"  => array("NS" => "02/06/1991", "Quê quán" => "Hải Dương" ),
    "Phạm Thị Mai"  => array("NS" => "02/06/1992", "Quê quán" => "Hải Phòng" ),
    "Kiều Đức Mạnh"  => array("NS" => "02/06/1990", "Quê quán" => "Yên Bái" ),
    "Lê Kiều Trinh"  => array("NS" => "02/06/1993", "Quê quán" => "Lào cai" ),

    );
	echo "<pre>";
	print_r($mangktt);
	echo "</pre";
	// foreach ($mangktt as $x => $y) {
	// 	echo "môn <b>$x</b>";
	// }
	?>
</body>
</html>
btvn tìm ước chung lớn nhất n số.