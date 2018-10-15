<?php 
include('functions.php');
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<title>نسائيات</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="تطبيق نسائيات" />
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
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-rss"></i></a></li>
									<li><a href="admin/index.php"><i class="fa fa-vk"></i></a></li>
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
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
										<h3> نسائيات</h3>
										<p>اول منصة عربية  سعودية تهتم بالمراة و خدماتها </p>
										<div class="w3-button">
											<div class="w3ls-button">
												<a href="">سجل حضورك</a>
											</div>
										</div>
									</div>
								
							
								
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
	</div>
	<!-- //choose-us -->
	<!-- popular -->
	<div class="popular-section-wthree jarallax">
		<div class="agileinfo-dot">
			<div class="container">	
				<div class="w3-heading-grid popular-heading">
					<h3> خدماتنا</h3>
					<div class="agileits-border"> </div>
				</div>
				<div class="popular-agileinfo">
					<div class="col-md-3 popular-grid">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<h4>العروض و الاشعارات</h4>
						<p>يشمل التطبيق على تقنيات تسويق الكتروني تتيح لك البقاء معنا دوما و معرفة العروض و المراكز الالمتمية</p>
					</div>
					<div class="col-md-3 popular-grid">
						<i class="fa fa-anchor" aria-hidden="true"></i>
						<h4>خدمات تقنية</h4>
						<p>خدمات تقنية لكل من الموسسات و الافراد </p>
					</div>
					<div class="col-md-3 popular-grid popular-grid-bottom">
						<i class="fa fa-book" aria-hidden="true"></i>
						<h4>الدليل الشامل  </h4>
						<p>دليل شامل لجميع مراكز التجميل و الافراح و القاعات</p>
					</div>
					<div class="col-md-3 popular-grid">
						<i class="fa fa-car" aria-hidden="true"></i>
						<h4>الوقت و الجودة  </h4>
						<p>نوفر عنك عناء البحث و تصلك خدماتنا على هاتفك</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //popular -->
	<!-- news -->
	
	<!-- //news -->
	<!-- footer -->
	
	<!-- //footer -->
	<!-- copyright -->
	
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
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