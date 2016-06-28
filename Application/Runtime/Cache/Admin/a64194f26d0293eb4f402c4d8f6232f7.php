<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<link href="/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/Public/js/jquery.min.js"></script>
		<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/Public/css/contact.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--控制两个div高度相同 -->
		<script type="text/javascript">
		function $(id){ 
			return document.getElementById(id) 
		} 
		function getHeight() { 
			if ($("left").offsetHeight>=$("right").offsetHeight){
				$("right").style.height=$("left").offsetHeight + "px";
			}
			else{
				$("left").style.height=$("right").offsetHeight + "px";
			}	
		}
		//window.onresize = function () {alert("改变大小");}
		window.onload = function() {
			//getHeight();
		}
		</script>
	</head>
<body>
<!--header start here-->
<div class="header">
    <div class="container header-main">      	
			<div class="logo">
				<img src="/Public/images/logo.jpg" alt=""/> 
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="/Public/images/icon.png" alt=""/></span>
				<nav>
					<ul class="res">
						<li><a href="<?php echo U('Homepage/homepage');?>" >Home Page</a></li>
						<li><a href="<?php echo U('Researchfield/researchfield');?>" >Research Fields</a></li>
						<li><a href="<?php echo U('Publication/publication');?>" >Publications and Courses</a></li>
						<li><a href="<?php echo U('Contact/contact');?>" class="active">Contact</a></li>
						<li><a href="<?php echo U('Homepage/manage');?>">Manage</a></li>
					</ul>
				</nav>

			<!-- script-for-menu -->
				<script>
				   $( "span.menu" ).click(function() {
					 $( "ul.res" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
			<!-- /script-for-menu -->
			</div>
			<div class="clearfix"> </div>	 	
	</div>
</div>
<!--header end here-->

<!--main start here-->
<div class="main">
    <div class="container">
      <div class="row">
		<div class="col-md-5 left" id="left">
		 	<div class="row profile">
				<form enctype="multipart/form-data" action="<?php echo U('Homepage/savePersonalInfo');?>" method="post">
					<div class="save">
						<input name="submit" type="submit" value="Save">
					</div>
					<input id="upload" type="file" name="myPhoto"/>
					<div class="col-md-6 pic">						
					    <img src="/Public/images/profile.jpg" class="img-responsive"/>
					</div>
					<div class="col-md-6 resume">
						<table border="0">
							<tr><th>name</th></tr>
							<tr><td><input type="text" value="<?php echo ($name); ?>" maxlength="30" name="name"/></td></tr>
							<tr><th>title</th></tr>
							<tr><td><input type="text"  value="<?php echo ($title); ?>" name="title"/></td></tr>
							<tr><th>address</th></tr>
							<tr><td><input type="text"  value="<?php echo ($address); ?>" name="address"/></td></tr>
							<tr><th>phone</th></tr>
							<tr><td><input type="text"  value="<?php echo ($phone); ?>" maxlength="11" name="phone"/></td></tr>
							<tr><th>email</th></tr>
							<tr><td><input type="email"  value="<?php echo ($email); ?>" name="email"/></td></tr>
						</table>
	
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-7 contact" id="right">
		 <h1>CONTACT ME</h1>
		 <h2>Please use my contact form to reach out or share any questions and inquiries. </h2>
			<form action = "<?php echo U('Contact/sendEmail');?>" method="post">
			<div class="row_5">
             	<input name="name" type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			 	<input name="email" type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
			 	<input name="subject" type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
			 	<div class="clearfix"></div>
			</div>
			<div class="row_6">
               <textarea name="message" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
            </div>
            <input name="submit" type="submit" id="submit" value="Send Message">
	        <div class="clearfix"></div>
         </form>
		</div>
		<div class="clearfix"> </div>
	  </div>
    </div>
  </div>
<!--main end here-->

<!--copyright start here-->
<div class="bottom">
	<div class="container bottom-nav">
		<span>
			<ul>
				<li class="li1"><a href="<?php echo U('Homepage/homepage');?>">Home Page</a></li>
				<li><a href="<?php echo U('Researchfield/researchfield');?>">Research Fields</a></li>
				<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
				<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
				<li><a href="<?php echo U('Homepage/manage');?>">Manage</a></li>
			</ul>
		</span>
		</br></br>
		<div class="copyright">
		<span>Copyright © Caoru 2015</span>
		</div>
	</div>
</div>
<!--copyright end here-->
</body>
</html>