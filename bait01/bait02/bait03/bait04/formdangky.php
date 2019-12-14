<!DOCTYPE html>
<html>
<head>
<title>Trang đăng ký ngoại trú</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Đăng Ký Ngoại Trú
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th>STT</th>
					<th>Mã sinh viên</th>
					<th>Họ tên</th>
                    <th>Lớp</th>
                    <th>Khoa</th>
                    <th>Chỗ ở hiện tại</th>
                    <th>Quê quán</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Ngày đăng ký</th>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-body">
			<form action="codedk.php" method="POST">
				<div class="form-group">
					<label>STT</label>
					<input type="text" name="st" class="form-control">
				</div>
				<div class="form-group">
					<label>Mã sinh viên</label>
					<input type="text" name="msv" class="form-control">
				</div>
				<div class="form-group">
					<label>Họ tên</label>
					<input type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Lớp</label>
					<input type="text" name="class" class="form-control">
                </div>
                <div class="form-group">
					<label>Khoa</label>
					<input type="text" name="khoaa" class="form-control">
                </div>
                <div class="form-group">
					<label>Chỗ ở hiện tại</label>
					<input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
					<label>Quê quán</label>
					<input type="text" name="que" class="form-control">
                </div>
                <div class="form-group">
					<label>Số điện thoại </label>
					<input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
					<label>Ngày đăng ký</label>
					<input type="text" name="date" class="form-control">
				</div>
				<td><input type="submit" value ="Đăng ký"></td></a>
			</form>
		</div>
	</div>
</div>
</body>
</html>