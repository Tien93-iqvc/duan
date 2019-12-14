<?php
    $ten = $_POST['ten'];
    $pas = $_POST['mk'];
    $quyenhan = $_POST['quyen'];
    //Tạo kết nối đến CSDL
   $conn = mysqli_connect("localhost","root","123456789","thongtin"); 
    //Câu truy vấn
   $kt = "select * from acounts where username = '".$ten."'";
   $resualt = mysqli_query($conn,$kt) or die ("Không thể kết nối được !");
   //Note người dùng phải nhập thông tin
   if(isset($_POST["login"]))
   {
       if($ten == ""|| $pas == ""){
            echo "Vui lòng nhập thông tin !";
       }
   }
   if($row = mysqli_fetch_array($resualt)){
       {
           if($ten == $row['username']){
               if($pas == $row['password']){
                   //Hiển thị nội dung thông tin trong sesction
                   //Kiểm tra có tồn tại không trước khi nó chuyển trang 
                   $_SESSION['ten'] = $_POST['pas'];
                   $_SESSION['quyenhan'] == 1;
                   //Sử dụng header location để điều hướng trang và chuyển trang
                    header('location:bait03/trangchugiaodien.php');
               }    
            }   
               else 
               {
                   if($_SESSION['quyenhan'] ==  0){
                       header('location:bait03/bait04/trangchugiaodien.php');
                   }                  
           else{
                echo "Mật khẩu không hợp lệ !";
           }
       }
    }
}
?>
<p align="left"><a href="trangdangnhap.php">Quay lại trang đăng nhập</a></p>
