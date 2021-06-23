<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['submit']))
		{
			echo "mời nhập thông tin";
		}
		else{
		$user=$_POST['username'];
		$password=$_POST['password'];
		$x=file('info.txt');
		$result=array();
		$flag="";
		foreach ($x as $value) {
			$value = explode('|', $value);
			if($value[0]==$user){
				$result=$value;
				$flag=true;
				break;
			}else{
				$flag=false;
			}
			}
		}

	// if(checkempty($_POST['username']) || checkempty($_POST['password']) || checkempty($_POST['login'])){
	// 	header('location: dangnhap.php');
	
			

	//kiểm tra user
	if($flag==false){
		echo "không tìm thấy user";
		echo "<br>";
		echo "<a href='dangnhap.php'>Đăng nhập lại </a>";
	}else{
		///kiểm tra id và pass có đúng không?
		//đúng => xin chào
		//sai => đăng nhập lại
		if($result[0]==$user && $result[1]==$password){
			//gán sang session để chuyển trang vẫn gọi được, result chỉ gọi được ở trang này.

			$_SESSION['fullname']=$result[2];
			$_SESSION['flag']=true;
			echo "chào mừng ".$_SESSION['fullname']; 
			echo "<br>";
			echo "<a href='dangxuat.php'>Đăng Xuất </a>";
		}
		else{
			echo "Mật khẩu không đúng";
			echo "<a href='dangnhap.php'>Đăng nhập lại</a>";
		}
	}
	?>
</body>
</html>