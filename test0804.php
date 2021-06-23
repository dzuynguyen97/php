<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	if(mysql_num_rows($do)>0){
		?>
		<table>
			<caption>thong tin loai san pham</caption>
			<tr>
				<td><b>Ma loai</b></td>
				<td><b>Tên loại</b></td>
				<td><b>Nơi sản xuất</b></td>
			</tr>
			<?php 
			while ($row=mysqli_fetch_array($do)) { ?>
				<tr>
					<td><?php echo $row[0]?>;</td>
					<td><?php echo $row[1]?>;</td>
					<td><?php echo $row[2]?>;</td>
				</tr>
				<?php }?>
			}
			?>
		</table>

	}
	?>
</body>
</html>