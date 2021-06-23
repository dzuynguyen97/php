<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php function tinhgiaithua($x){
	if($x!=0){
		return $x*tinhgiaithua($x-1);
	} else{
		return 1;
	}
	echo "100!= " .tinhgiaithua(100)."br";
	// $nKQ = 0;
 //              for($i = 1; $i <= x; $i++){
 //                        {
 //                            $nKQ *= $i;
 //                        }
 //                  return $nKQ;
 //                  echo "$nKQ";}
}
?>
<b>Hàm</b>

</body>
</html>