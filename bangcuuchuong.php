<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="get">
	<p align="center"><b><i>Bảng cửu chương</i></b></p>
	<table  border="2px";  align="center">
		<tr>
		<?php
			for($i = 1; $i < 10; $i ++) {
    		echo "<td>";
    		for($j = 1; $j <10; $j ++) {
       			echo "$i * $j = " . ($i * $j);
        		echo "<br>";
    				}
   			 echo "</td>";
			}
		?>
		</tr>
	</table>
	</form>
</body>
</html>