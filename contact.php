<?php 
include ('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>تطبيق نسائيات</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Wedding Plan Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
			<div class="w3layouts-header-top">
				<div class="container">
					<div class="w3-header-top-grids">
						<div class="w3-header-top-left">
							<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +966 565579480</p>
						</div>
						<div class="w3-header-top-right">
							<div class="agileinfo-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-vk"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			

		
			<div class="head">
			<div class="container">
				<div class="navbar-top">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
							 <div class="navbar-brand logo ">
								<h1><a href="index.php">نسائيات <span></span></a></h1>
							</div>

						</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
									<li class="dropdown">
	<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">المشاغل و الصالونات <b class="caret"></b></a>
											<ul class="dropdown-menu">
												
											<?php get_sectors_saloons() ?>
											</ul>
										</li>
							
					
										<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown"> ارسم فرحتك    <b class="caret"></b></a>
									<ul class="dropdown-menu">
									<?php get_sectors_cos() ?>
									
									</ul>

								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">مصممي الازياء   <b class="caret"></b></a>
									<ul class="dropdown-menu">
									<?php get_sectors_arrange() ?>
									
									</ul>
								
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">استديو حواء <b class="caret"></b></a>
									<ul class="dropdown-menu">
									<?php get_sectors_studio() ?>
									
									</ul>
								</li>
								<li><a href="gallery.php">شركائنا</a></li>
								<li class="dropdown">
										<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown"> صحتك جمالك  <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="beauty.php"> التجميل   </a></li>
											<li><a href="fit.php">رشاقتك </a></li>
											<li><a href="weight.php">وزنك المثالي </a></li>
											
										</ul>
									</li>
									<li class="dropdown">
										<a href="" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown"> المؤسسات   <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="saloons"> المشاغل    </a></li>
											<li><a href="cos">منسقي الافراح </a></li>
											<li><a href="studios">الاستديوهات</a></li>
											<li><a href="designers">المصممين</a></li>

											
										</ul>
									</li>
								<li><a href="contact.php">الاستفسارات و الملاحظات</a></li>

							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
							
			<div class="agileinfo-banner">
				<div class="container">
					<h2></h2>
				</div>
			</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact-top">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-7 contact-form">
					<form action="contact.php" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" class="email" name="Email" placeholder="Email" required="">
						<textarea placeholder="استفسارك و ملاحظاتك" name="Message" required=""></textarea>
						<input type="submit" name="contact_btn" value="SUBMIT">
          </form>
          <?php 
if (isset($_POST['contact_btn'])){
  global $connection;
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $query = $_POST['Message'];

  $add_query = "insert into asks (name , email , query ) values ('$name','$email','$query')";
  $run_add_qury = mysqli_query($connection , $add_query);
  if ($run_add_qury){
	echo "<script>alert('تم ارسال استفسارك و سوف يتم الرد على ملاحظاتك في غضون 24 ساعة شكرا لك ')</script>";
	echo "<script>window.open('index.php','_self')</script>";
  }

}


?>
				</div>
		
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<div class="map">  
		<iframe src="https://www.google.com.sa/maps/place/%D8%A7%D9%84%D9%86%D8%B3%D9%8A%D9%85+%D8%A7%D9%84%D8%BA%D8%B1%D8%A8%D9%8A%D8%8C+%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%E2%80%AD/@24.7257224,46.8239664,13z/data=!3m1!4b1!4m5!3m4!1s0x3e2f00aa22386807:0x31730210cae750c5!8m2!3d24.7248337!4d46.8204406"></iframe>
	
	</div>
	<!-- //contact -->
	<!-- footer -->
	
		
	<!-- //footer -->
	<!-- copyright -->

	<!-- //copyright -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>