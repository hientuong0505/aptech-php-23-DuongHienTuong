<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Trang quản lí Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('css/style1.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
	<div class="w3layouts-main">
		<h2>Đăng nhập</h2>
		<form action="{{route('admin.dashboard')}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="_method" value="post" />
				
				<input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
				<input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">

				<span><input type="checkbox" />Nhớ mật khẩu</span>
				<h6><a href="#">Quên mật khẩu</a></h6>
					<div class="clearfix"></div>
					<input type="submit" value="Sign In" name="login">
		</form>
			<p>Bạn đã có tài khoản chưa?<a href="registration.html">Tạo tài khoản mới</a></p>
	</div>
</div>


<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.dcjqa')}}ccordion.2.7.js"></script>
<script src="{{asset('js/scripts.js">')}}</script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('js/jquery.scrollTo.js')}}"></script>
</body>
</html>
