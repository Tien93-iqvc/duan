<?php session_start();?>
<!doctype html>
<html>
<head>	
	<title>Trang Chủ Trường Đại Học Quy Nhơn</title>
	<meta charset="utf-8"> 
	<meta name="keywords" content="" />
	<meta name="description" content=">" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.js"></script>
	<link rel="stylesheet" 	href="css/ui-lightness/jquery-ui-1.10.2.custom.css" />   
</head>
<body>
	
<div id="pageWrapper">
		<div id="header">
			<h1 id = "siteTitle">Trang Quản Lí Ngoại Trú Trường Đại Học Quy Nhơn</h1>
			<img id="logo2" src="images/logo2.png"/>		
		</div>
		<div id="nav"> 
		<div  id="menu" > 
			<a href="#">Trang chủ</a> |  
			<a href="thongbao.php">Thông báo chung</a> |
			<a href="lienhe.php">Thông tin liên hệ</a>	|
			<a href="index.php">Giới thiệu</a> |
			<a href="hotro.php">Hỗ trợ</a>
			<a href="#"></a>		 
		</div>
		<div id="login">
			
		</div>
		</div> 	
		<div id="contentWrapper" > 
			<div id="leftSide" > 
				<div class="group-box" id="danhmuc"> 
						<div class="title">Người quản trị</div>  
						<div class="group-box-content">
							<ul>																
								<li align="left"><a href="#">Thống Kê danh sách</a></li>
								<li align="left"><a href="#">Thông bao hoạt động</a></li>
								<li align="left"><a href="#">Tra cứu thông tin</a></li>
							</ul>						
						</div>						
				</div>
				<div class="group-box"> 
						<div class="title">Người dùng</div> 
						<div class="group-box-content">
						<ul>							
							<li align="left"><a href="formdangky.php">Đăng ký thông tin ngoại trú</a></li>
							<li align="left"><a href="codekqdk.php">Kết quả đăng ký thông tin</a></li>
							<li align="left"><a href="formgopy.php">Đóng góp ý kiến và thảo luận</a></li>
						</ul>						
						</div>						
				</div>
				<div class="group-box"> 
						<div class="title">Thông tin cá nhân</div> 
						<div class="group-box-content">
						<ul>							
							<li align="left"><a href="selectdl.php">Thông tin cá nhân</a> </li>
							<li align="left"><a href="codeformdmk.php">Thay Đổi Mật Khẩu</a> </li>
						</ul>						
						</div>						
				</div>				 				 
			</div>
		<div id="mainContent">