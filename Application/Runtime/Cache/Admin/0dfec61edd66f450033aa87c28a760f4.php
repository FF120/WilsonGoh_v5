<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>System Login</title>
	<link href="/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<script src="/Public/js/jquery.min.js"></script>
	<link href="/Public/css/login.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<h1>management system</h1>
	<div class="col-md-3"></div>
	<div class="col-md-6 login">
		<h2>Please input username and password before login</h2>
		<form class="row_5" enctype="multipart/form-data" action="<?php echo U('Login/plogin');?>" method="post">
			<div class="row">
				<label>Username</label>
				<input name="username" type="text" class="text" >
			</div>
			<div class="row">
				<label>Password</label>
				<input name="password" type="password" class="text" >
			</div>
			<div class="row">
			<input name="submit" type="submit" id="submit" value="login">  
			</div>
        </form>
		<span class="copyright">Copyright © Caoru 2015</span>
	</div>
	<div class="col-md-3"></div>
</body>
</html>