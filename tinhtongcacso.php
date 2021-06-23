<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
function tongcacchuso($n) {
 	while (abs($n)) {
 		# code...
 	}
    $total = 0;
    do {
        $total = $total + ($n % DEC_10);
       
    } while ( $n > 0 );
    return $total;

}
 echo "m=10341";
 echo "tong cac so m la: ".tongcacchuso(10341);

?>
</body>
</html>