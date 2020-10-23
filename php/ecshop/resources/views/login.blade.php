<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom left, pink 20%, lightblue 80%);
            height: 100vh;
            }
            #login .container #login-row #login-column #login-box {
                margin-top: 120px;
                max-width: 600px;
                height: 320px;
                border: 1px solid #9C9C9C;
                background-color: #EAEAEA;
                }
            #login .container #login-row #login-column #login-box #login-form {
                padding: 20px;
                }
            #login .container #login-row #login-column #login-box #login-form #register-link {
                margin-top: -85px;
            }
            .email:hover{
                border: 3px solid #2ecc71;
            }
            .password:hover{
                border: 3px solid blue;
            }
            .btn-dangNhap{
                border-radius: 24px;
                outline: none;
                transition: 0.5s;
                display: block;
            }
            .btn-dangNhap:hover{
                background: #A5DF00;
                width: 100px;
            }
        }

    </style>

</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            @if (session('status') != null)
                                {{ session('status') }}
                            @endif
                            @csrf
                            <h2 class="text-center text-info">ĐĂNG NHẬP</h2>

                            {{-- Email --}}
                            <div class="form-group">
                                <label for="username" class="text-info">Email của bạn</label>
                                <br>
                                <input type="email" name="email" id="username" class="form-control email">
                            </div>

                            {{-- Password --}}
                            <div class="form-group">
                                <label for="password" class="text-info">Mật khẩu</label>
                                <br>
                                <input type="password" name="password" id="password" class="form-control password">
                            </div>

                            <div class="form-group">
                                <label for="remember-me" class="text-info">
                                    <span>Nhớ tài khoản</span> 
                                    <span>
                                        <input id="remember-me" name="remember-me" type="checkbox">
                                    </span>
                                </label>
                                <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md btn-dangNhap" value="submit">
                            </div>

                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Đăng ký tài khoản</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>




