<!DOCTYPE html>
<html>
<head>
	<title>vòng lặp for : bảng</title>
</head>
<body>
<div style=" border: 2px solid:black; margin: 30px">
	<form action="" method="get">
	<p align="center"><b><i>Họ & tên :Nguyễn Mạnh Duy</i></b></p>
	<table border="2px";  align="center">
		
		<!-- <tr> -->
			<?php for ($i=1; $i <10 ; $i++) { 
				for ($j=1; $j <10 ; $j++) { 
					echo " 
			<tr>
			 <th>
			 $i * $j 
			 </th>
			 <th>$i</th>
			 <th>$i</th>
			 <th>$i</th> </tr>";
										};
			
											};
			 ?>
		<!-- </tr>  -->
	

	</table>
</form>

</div>
</body>
</html>