<?php include("functions/init.php")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CharityPlus</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CharityPlus</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../../images/icon-logo.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>

	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
	<script src="../js/index.js"></script>
</head>
<body class="home3">
<div class="header">
	<div class="container">
		<div class="wrap">
			<div class="logo col-md-2 col-sm-12 col-xs-12">
				<a href="../index.php"><img src="../images/logo-3.png" alt=""></a>
			</div>
			<div class="static col-md-10 col-sm-12 col-xs-12">
				<div class="row">
					<div class="header_top">
						<div class="col-md-11">
							<div class="row">
								<div class="pull_left">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-flickr"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
									<a href=""><i class="fa fa-pinterest-p"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
								<div class="pull_right">
									<ul>
									<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; font-size:13px;">Login</button>										
									<li><span><i class="fa fa-google-wallet"></i>Wallet balance ₹ 25000</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="main_menu">
						<a id="setting"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
						<ul class="menu">
							<li style="margin-bottom: 30px; border-bottom: none;"><a id="close"><i class="fa fa-times" aria-hidden="true"></i></a></li>
							<li>
							
								<a href="../index.php">Home<span id="sub_1"></span></a>
								
							</li>
							<li>
								<a href="../pages/about/about-us.php">About Us<span id="sub_2" ></span></a>
								
									<li><a href="../pages/campaigns/campaigns.php">Charity</a></li>
									<li><a href="../pages/campaigns/campaigns-list.php">Campaigns</a></li>
								
							
							<li><a href="../pages/event/event.php">Events</a></li>
							<li>
							<a href="../pages/blog/grid-layout.php">Blogs<span id="sub_5" ></span></a></li>
							
							<li>
								<a href="../pages/shop/shop-sitebar-left.php">Shop <span id="sub_6" ></span></a>
								
								
							</li>
							
							
							<li><a href="../pages/about/contact.php">Contact Us</a></li>
							
						<div class="button_donate">
							<a href="#">Donate Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<script type="text/javascript">
		(function($){
			$('#setting').on('click',function(e){
				e.preventDefault();
				$('.menu').slideToggle('slow');
			});
			$('#close').on('click',function(e){
				e.preventDefault();
				$('.menu').slideToggle('slow');
			});
			$('#sub_1').on('click',function(e){
				e.preventDefault();
				$('.sub1').slideToggle('slow');
			});
			$('#sub_2').on('click',function(e){
				e.preventDefault();
				$('.sub2').slideToggle('slow');
			});
			$('#sub_3').on('click',function(e){
				e.preventDefault();
				$('.sub3').slideToggle('slow');
			});
			$('#sub_4').on('click',function(e){
				e.preventDefault();
				$('.sub4').slideToggle('slow');
			});
			$('#sub_5').on('click',function(e){
				e.preventDefault();
				$('.sub5').slideToggle('slow');
			});
			$('#sub_6').on('click',function(e){
				e.preventDefault();
				$('.sub6').slideToggle('slow');
			});
			$('#quick-menu').on('click',function(e){
				e.preventDefault();
				$('.sub9').slideToggle('linear');
			});
			$(window).resize(function(){
				if($(window).width()>1200){
					$('.menu').css('display','block');
				}
				if($(window).width()<1200){
					$('.menu').css('display','none');
				}
			});
		})(jQuery);
</script>
