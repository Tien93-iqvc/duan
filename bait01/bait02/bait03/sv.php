<?php
    $coon = mysqli_connect("localhost","root","123456789","thongtin");
    $sql = "select * from thongtinsv";
    $resualt = mysqli_query($coon,$sql);
    if($resualt){
        while($row = mysqli_fetch_array($resualt)){
            printf ("hoten:%s, lop:%s , khoa:%s, diachi:%s , tinh:%s , phone:%s, email:%s, cmnd:%s, tinhtranghoc:%s<br>" ,
            $row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
        }
        mysqli_free_result($resualt);
    }
    
?>