<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập vào website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="csss/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body >
        <header>
        </header>
        <main>
            <div class="container">
            <div class="login-form">
                <form action="codedmksv.php" method="post">
                    <h1>Trang đổi mật khẩu</h1>
                    <div class="input-box">
                        <i></i>
                        <input type="text" name="tendn" placeholder="Nhập username" >
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" name="mkc" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" name="mkm1" placeholder="Nhập mật khẩu mới">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" name="mkm2" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="btn-box">
                        <button type="submit">
                            Đổi mật khẩu
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </main>
    </body>
</html>
