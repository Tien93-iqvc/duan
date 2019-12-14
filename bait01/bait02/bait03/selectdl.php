<meata charset = UTF8>
<!DOCTYPE html>
<html>
<head><title>Trang thông tin người dùng</title></head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<table align="center" border="1" width="1480">
    <tr align="center">
        <h2 align="center">Thông tin sinh viên</h2>
        <td>Mã sinh viên</td>
        <td>Họ tên</td>
        <td>Lớp</td>
        <td>Khoa</td>
        <td>Địa chỉ</td>
        <td>Tỉnh</td>
        <td>Phone</td>
        <td>Email</td>
        <td>CMND</td>
        <td>Tình trạng học</td>
        <td>Khóa học</td>
    </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "123456789" , "thongtin");
        $sql = "select * from ttstudents";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
    ?>
            <tr align="center">
            <td>
                    <?php echo $row['masv']; ?>
                </td>
                <td>
                    <?php echo $row['hoten']; ?>
                </td>
                <td>
                    <?php echo $row['lop']; ?>
                </td>
                <td>
                    <?php echo $row['khoa']; ?>
                </td>
                <td>
                    <?php echo $row['diachi']; ?>
                </td>
                <td>
                    <?php echo $row['tinh']; ?>
                </td>
                <td>
                    <?php echo $row['phone']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['cmnd']; ?>
                </td>
                <td>
                    <?php echo $row['tinhtrang']; ?>
                </td>
                <td>
                    <?php echo $row['khoahoc']; ?>
                </td>            
            </tr>
    <?php } ?>
</table>
</body>
</html>