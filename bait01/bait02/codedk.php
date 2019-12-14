<?php
	$conn=mysqli_connect("localhost","root","123456789","thontinnguoidung") or die("Không kết nối được");	
	$tendn = $_POST["user"];
    $password1 = $_POST["pass1"];
    $password2 = $_POST["pass2"];
	$email = $_POST["ema"];
    $phone = $_POST["sdt"];
    $diachi = $_POST["dc"];
	if(isset($_POST["login"]))
	{
		if($tendn =="" || $password1=="" ||$password2==""|| $email=="" || $phone=="" || $diachi =="")
			echo "Vui lòng nhập đầy đủ thông tin!. <a href='javascript: history.go(-1)'>Quay lại</a>";
        else
			if($password1 == $password2)
			{
				//Kiểm tra tài khoản đã tồn tại chưa
				$sql = "select * from thongtin where username='".$tendn."'";
				$kt= mysqli_query($conn,$sql);
				if(mysqli_num_rows($kt) > 0)
					echo "Tên đăng nhập đã tồn tại!. <a href='javascript: history.go(-1)'>Quay lại<a>";
				else
				{
				//Ngoài ra ta thêm thực hiện một cách ban đầu
					$sql = "insert into thongtin(username, password, email, phone, diachi) 
							values('".$tendn."','".$password1."','".$email."','".$phone."', '".$diachi."')";
					mysqli_query($conn, $sql);
					echo "Bạn đã đăng ký thành công!. <a href='javascript: history.go(-2)'><i>Quay lại trang đăng nhập</i></a>";
				}
			}	
			else
				echo "Bạn đăng ký thật bại!. <a href='javascript: history.go(-1)'>Quay lại</a>";
	}
?>