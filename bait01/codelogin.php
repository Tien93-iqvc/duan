<?php 				 
	if (isset($_SESSION["loggedin"])){
	    echo " | <a href='trangdangnhap.php?logut' id='aLogout'>Thoát</a>";	
		    }else {
					echo "<a href='trangdangnhap.php'>Đăng nhập</a>";
				}
			?>