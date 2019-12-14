<meta charset = "UTF8">
<?php
    //Tạo chuỗi kết nối đến CSDL
    $coon = mysqli_connect("localhost","root","123456789","thongtin") or die ("Không thể kết nối được");
    $stt = $_POST["st"];
    $name = $_POST["fullname"];
    $lophoc = $_POST["class"];
    $khoahoc=$_POST["khoaa"];
    $noiht = $_POST["address"];
    $hometown = $_POST["que"];
    $sdt = $_POST["phone"];
    $datedk = $_POST["date"];
    //Truy vấn tới
    $sql ="select * from formkqdk where hoten = '".$name."'";
    $result = mysqli_query($coon,$sql);
    //Note
    if(isset($_POST["add"])){
        if($name == ""||$lophoc == ""|| $khoahoc == ""|| $noiht ==""||$hometown == ""||$sdt == "" || $datedk == ""){
            echo "Vui lòng nhập đủ thông tin !";
        }
       else{
            if($row = mysqli_fetch_array($result)){
                if($hoten == $row["name"]){
                    echo "Người dùng đã tồn tại";
                }
        else{
            $sql = "insert into formkqdk(hoten, lop, khoa, noio, quequan, phone, email, ngaydangky)
            values('".$name."','".$lophoc."','".$khoahoc."','".$noiht."','".$hometown."','".$sdt."', '".$datedk."')";
            mysqli_query($coon, $sql);
            echo "Đăng ký ngoại trú thành công!";
        }
    }
        else
            echo "Đăng ký nội trú thành công!";
        }
    }
        
?>
<a href="formdangky.php">Quay lại trang chủ</a>