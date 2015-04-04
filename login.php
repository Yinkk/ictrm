
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/global.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>

</head>
<body>

<div id="content">
	<div id="full-main">
		<div id="login" class="post">
			<h2>เข้าสู่ระบบ</h2>

	<div style="margin-left:270px;border-left: 1px solid #ddd;padding-left:30px;">
	<form id="login-form" method="post" action="">
		<input type="hidden" name="submit" value="login-form" />
		<p><label for="loginuser">Username</label><input type="text" id="loginuser" name="username" class="txtbox" /></p>
		<p><label for="loginpass">Password</label><input type="password" id="loginpass" name="password" class="txtbox" /></p>
		<p><input type="checkbox" id="loginremember" name="remember" value="1" /><label id="remember" for="loginremember">จดจำการเข้าสู่ระบบ</label></p>
		<p><button id="btn-submit" type="submit">Login</button></p>
	</form>
	</div>
	<div class="clear"></div>

		</div>
	</div>
</div>

</body>
</html>
