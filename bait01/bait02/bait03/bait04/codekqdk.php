<meta charset = "UTF8">
<!DOCTYPE html>
<html>
<head><title>Trang Kết quả đăng ký</title></head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<table align="center" border="1" width="1480">
    <tr align="center">
        <h2 align="center">Đăng ký người dùng</h2>
        <td>STT</td>
        <td>Mã sinh viên</td>
        <td>Họ tên</td>
        <td>Lớp</td>
        <td>Khoa</td>
        <td>Chỗ ở hiện tại</td>
        <td>Quê quán</td>
        <td>Số điện thoại</td>
        <td>Email</td>
        <td>Ngày đăng ký</td>
    </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "123456789" , "thongtin");
        $sql = "select * from formkqdk";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
    ?>
            <tr align="center">
                <td>
                    <?php echo $row['id']; ?>
                </td>
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
                    <?php echo $row['noio']; ?>
                </td>
                <td>
                    <?php echo $row['quequan']; ?>
                </td>
                <td>
                    <?php echo $row['phone']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['ngaydangky']; ?>
                </td>
            </tr>
    <?php } ?>
</table>
</body>
</html>