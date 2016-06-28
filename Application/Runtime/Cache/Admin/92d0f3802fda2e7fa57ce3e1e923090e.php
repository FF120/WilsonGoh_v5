<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>ResearchFields</title>
		<link href="/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script src="/Public/js/jquery.min.js"></script>
		<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="/Public/css/researchfield.css" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
<!-- text autoHegiht-->
<script type="text/javascript">
	 $(function(){
	  $(".autoHeight").bind("keydown keyup",function(){
	   $(this).autosize();
	  }).show().autosize();
	 });
 
	 $.fn.autosize = function(){
	  $(this).height('0px');
	  var setheight = $(this).get(0).scrollHeight;
	  if($(this).attr("_height") != setheight)
	   $(this).height(setheight+"px").attr("_height",setheight);
	  else
	   $(this).height($(this).attr("_height")+"px");
	 }
</script>
<!--end text autoHegiht-->
		<script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
		<style>
			.pagination ul {
				display: inline-block;
				margin-bottom: 0;
				margin-left: 0;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
				box-shadow: 0 1px 2px rgba(0,0,0,0.05);
			}
			.pagination ul li {
				display: inline;
			}

			.pagination ul li.rows {
				line-height: 30px;
				padding-left: 5px;
			}
			.pagination ul li.rows b{color: #f00}

			.pagination ul li a, .pagination ul li span {
				float: left;
				padding: 4px 12px;
				line-height: 20px;
				text-decoration: none;
				background-color: #fff;
				background: url('') 0px 0px;
				border: 1px solid #d3dbde;
				/*border-left-width: 0;*/
				margin-left: 2px;
				color: #08c;
			}
			.pagination ul li a:hover{
				color: red;
				background: #0088cc;
			}
			.pagination ul li.first-child a, .pagination ul li.first-child span {
				border-left-width: 1px;
				-webkit-border-bottom-left-radius: 3px;
				border-bottom-left-radius: 3px;
				-webkit-border-top-left-radius: 3px;
				border-top-left-radius: 3px;
				-moz-border-radius-bottomleft: 3px;
				-moz-border-radius-topleft: 3px;
			}
			.pagination ul .disabled span, .pagination ul .disabled a, .pagination ul .disabled a:hover {
				color: #999;
				cursor: default;
				background-color: transparent;
			}
			.pagination ul .active a, .pagination ul .active span {
				color: #999;
				cursor: default;
			}
			.pagination ul li a:hover, .pagination ul .active a, .pagination ul .active span {
				background-color: #f0c040;
			}
			.pagination ul li.last-child a, .pagination ul li.last-child span {
				-webkit-border-top-right-radius: 3px;
				border-top-right-radius: 3px;
				-webkit-border-bottom-right-radius: 3px;
				border-bottom-right-radius: 3px;
				-moz-border-radius-topright: 3px;
				-moz-border-radius-bottomright: 3px;
			}

			.pagination ul li.current a{color: #f00 ;font-weight: bold; background: #ddd}
		</style>
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
						<li><a href="<?php echo U('Researchfield/researchfield');?>" class="active">Research Fields</a></li>
						<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
						<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
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
      	
		<div class="col-md-5 left">
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
				</div>
				<div class="row research">
					<h1>Basic Information</h1>
					<form enctype="multipart/form-data" action="<?php echo U('Researchfield/saveBasicInformation');?>" method="post">
					<textarea  class="autoHeight"  name="Basic_Information" id="Basic_Information" rows="10" cols="60">
					<?php echo ($basic_information); ?>
					</textarea>
	
					<input name="submit" type="submit" value="Save">
					</form>
				</div>	
				<div class="clearfix"></div>
		</div>
				
		<div class="col-md-7 right">
			<div class="head">
				<img src="/Public/images/topic.jpg" alt=""/>
				<font>Current Research Topics</font>
			</div>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aa): $mod = ($i % 2 );++$i;?><h4><a href="<?php echo U('Researchfield/goDeatils?id='.$aa['id']);?>" ><?php echo ($aa['title']) ?></a></h4>
			<?php echo substr(html_entity_decode($aa['content']),0,400) ?>
			</br></br>
			<span><a href="<?php echo U('Researchfield/goDeatils?id='.$aa['id']);?>">read more</a></span>
			<hr><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="pagination showpage">
			　　<?php echo ($page); ?>
		</div>
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
	<script type="text/javascript">
		CKEDITOR.editorConfig = function( config ) {
			config.language = 'es';
			config.uiColor = '#F7B42C';
			config.height = 300;
			config.toolbarCanCollapse = true;
		};

		CKEDITOR.replace( 'Basic_Information' );
	</script>
</html>