<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link rel="stylesheet" href="../../assets/vender/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Document</title>

</head>

<body>
    <div class="wrapper">
        <form class="form-login" method="post" action="../user/userAct.php?req=checkLogin">
            <h1 class="form-heading">Đăng Nhập</h1>
            <div class="form-group">
                <i class="fa fa-user-circle-o"></i>
                <input type="text" name="user_name" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fa fa-key"></i>
                <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Đăng Nhập" class="form-submit">
        </form>
    </div>
</body>
<script src="../../assets/js/jquery-3.6.0.min.js"></script>
<script src="../../assets/js/login.js"></script>

</html>