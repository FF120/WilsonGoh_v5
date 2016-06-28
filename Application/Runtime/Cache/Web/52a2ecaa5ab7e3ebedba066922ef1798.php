<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Wilson Goh</title>
<link href="/WilsonGoh_v5/Public/CSS/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<script src="/WilsonGoh_v5/Public/js/jquery.min.js"></script>
<link href="/WilsonGoh_v5/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/WilsonGoh_v5/Public/css/homepage.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/WilsonGoh_v5/Public/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- end-smoth-scrolling -->
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
<!--start flexslider -->
<link href="/WilsonGoh_v5/Public/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="/WilsonGoh_v5/Public/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(function(){
		SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
	</script>
<!--end flexslider -->

</head>

<body>
<!--header start here-->
<div class="header">
    <div class="container header-main">      	
			<div class="logo">
				<img src="/WilsonGoh_v5/Public/images/logo.jpg" alt=""/> 
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="/WilsonGoh_v5/Public/images/icon.png" alt=""/></span>
				<nav>	
					<ul class="res">
							<li><a href="<?php echo U('Homepage/homepage');?>" class="active">Home Page</a></li>
							<li><a href="<?php echo U('Researchfield/researchfield');?>">Research Fields</a></li>
							<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
							<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
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
<!--banner start here-->
<div class="banner">
    <div class="container">
      <div class="banner-main row">
		<div class="col-md-5 left">
		 	<div class="row profile">
				<div class="col-md-6 pic">
				    <img src="/WilsonGoh_v5/Public/images/<?php echo ($data['image']); ?>" class="img-responsive"/>
				</div>
				<div class="col-md-6 resume">
				<table border="0">
					<tr><th>name</th></tr>
					<tr><td><label for="name"><?php echo ($user['name']); ?></label></td></tr>
					<tr><th>title</th></tr>
					<tr><td><label for="title"><?php echo ($user['title']); ?></label></td></tr>
					<tr><th>address</th></tr>
					<tr><td><label for="address"><?php echo ($user['address']); ?></label></td></tr>
					<tr><th>phone</th></tr>
					<tr><td><label for="phone"><?php echo ($user['phone']); ?></label></td></tr>
					<tr><th>email</th></tr>
					<tr><td><label for="email"><?php echo ($user['email']); ?></label></td></tr>
				</table>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-7 bann-right">
		 	<!-- FlexSlider -->
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<!--840px*530px -->
						<li><img src="/WilsonGoh_v5/Public/images/<?php echo ($apath); ?>" alt=""/></li>
						<li><img src="/WilsonGoh_v5/Public/images/<?php echo ($bpath); ?>" alt=""/></li>
					</ul>
				  </div>
	          </section>
              <!-- FlexSlider -->
		</div>
		<div class="clearfix"> </div>
	  </div>
    </div>
  </div>
<!--banner end here-->
<!--navi start here-->
<div class="navi">
	<div class="container menu">
		<ul>
			<li><a href="#" class="scroll"><span data-hover="per_info">Personal information</span></a></li>	
			<li><a href="#re_proj" class="scroll"><span data-hover="re_proj">Current Research Projects</span></a></li>
			<li><a href="#experience" class="scroll"><span data-hover="experience">Work Experiences</span></a></li>
			<li><a href="#qualification" class="scroll"><span data-hover="qualification">Qualifications and Honors</span></a></li>
			<li><a href="#achievement" class="scroll"><span data-hover="achievement">Achievements</span></a></li>
		</ul>   
	</div>
		
</div>
<!--navi end here-->
<!--info start here-->
<div class="info">
	<div class="container info-main">
		<fieldset class="personal" id="per_info">  
                <legend>
                	<img src="/WilsonGoh_v5/Public/images/per_info.png" alt=""/>
                	<font>Personal Information</font>
                </legend>  
                <div readonly="readonly"><?php echo ($personal_information); ?>
				</div>
        </fieldset>
        <fieldset class="research" id="re_proj">  
                <legend>
                	<img src="/WilsonGoh_v5/Public/images/research.png" alt=""/>
                	<font>Research Projects</font>
                </legend>
			<div readonly="readonly" ><?php echo ($research_projects); ?>
			</div>
        </fieldset>


	</div>
</div>
<!--info end here-->
<!--work start here-->
<div class="work">
	<div class="container">
		<div class="work-main row">
			<div class="col-md-6 experience" id="experience">
				<h1>Work</br>Experience</h1>
				<div readonly="readonly" class="area"><?php echo ($work_experience); ?>
				</div>
			</div>
			<div class="col-md-6 qualification" id="qualification">
				<h1>Qualifications</br>and Honors</h1>
				<div readonly="readonly" class='area'><?php echo ($qualifications_and_honors); ?>
				</div>
			</div>
			<div class="clearfix"> 
			</div>
		</div>
	</div>
</div>
<!--work end here-->
<!--achievement start here-->
<div class="achieve" id="achievement">
	<div class="container achieve-main">	
	<span>
		Achievements
		<img src="/WilsonGoh_v5/Public/images/achieve.png" alt=""/>
	</span>
	<div readonly="readonly"><?php echo ($achievements); ?>
	</div>
	</div>
</div>
<!--achievement end here-->
<!--copyright start here-->
<div class="bottom">
	<div class="container bottom-nav">
		<span>
			<ul>
			<li class="li1"><a href="<?php echo U('Homepage/homepage');?>">Home Page</a></li>
			<li><a href="<?php echo U('Researchfield/researchfield');?>">Research Fields</a></li>
			<li><a href="<?php echo U('Publication/publication');?>">Publications and Courses</a></li>
			<li><a href="<?php echo U('Contact/contact');?>">Contact</a></li>
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