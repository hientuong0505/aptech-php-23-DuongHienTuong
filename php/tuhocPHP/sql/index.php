<?php
$mysqli = new mysqli("localhost", "root", "", "demo");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // echo 'Mật khẩu sau khi mã hoá: '.$password; //echo dung in ra du lieu
    $req = $mysqli->query("SELECT `id` FROM `users` WHERE `email`='".$email."' AND `password`='".$password."' ");
    if ($req) {
        $res = $req->fetch_all();
        $count = count($res);
        if ($count == 0) {
            $result = 'Tài khoản hoặc mật khẩu sai!';
        } else {
            $result = 'Đăng nhập thành công!';
            header("Location: /index.php");
        }
    } else {
        $result = "Lỗi lệnh: SELECT `id` FROM `users` WHERE `email`='".$email."' AND `password`='".$password."' ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container d-flex justify-content-center login">
        <form method="POST" class="login__form login__form--white-smoke col-xl-4 col-lg-6 col-md-8 col-xs-10 p-3">
            <img src="https://getbootstrap.com/favicon.ico" alt="Logo" class="d-flex mx-auto mb-2">
            <?php
            if ($result) {

            ?>
            <div class="alert alert-info" role="alert">
                <?=$result;?>
            </div>
            <?php
                }
            ?>
            <div class="form-group m-0">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            Email
                        </span>
                    </div>
                    <input name="email" type="text" class="form-control" placeholder="Input your email">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            Password
                        </span>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Input your Password">
                </div>
                <button type="submit" class="d-flex mx-auto btn btn-sm btn-primary mt-2">Login</button>
            </div>
        </form>
    </div>
</body>

</html>