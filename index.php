<!-- This is page is the redirected page after you register showing check the activation link in your mail --> 

<?php include("header.php") ?>


<?php 

	if(logged_in()) {
		redirect("admin.php");
	}
  ?>

<?php include("nav.php") ?>


<!-- For login --> 
	  <?php display_message(); ?>
<?php validate_user_login(); ?>


<!-- For registration-->

<?php display_message(); ?>
<?php validate_user_registration(); ?>

	

  


	<!--  For the modal-->
	<?php include('modalform.php'); ?>

<?php include('signupmodal.php'); ?>
	<link rel="stylesheet" type="text/css" href="modalstyle.css">
<script src="modal.js"></script>




<div id="main" class="slideshow">
	<div id="sync10" class="owl-carousel owl-theme">
	     	<div class="item" style="background-image: url(images/bg1.jpg); width: 100%;">
	       		<div class="container">
	       			<div class="text_zz">
	       				<h3>Please help African<br> children make them<br> a better life.</h3>
	       				<div class="donate">
							<div class="button_donate">
								<a href="#">Donate Now</a>
							</div>
						</div>
		       		</div>
	       		</div>
	     	</div>
	     	<div class="item" style="background-image: url(images/bg2.jpg); width: 100%;">
	       		<div class="container">
	       			<div class="text_zz">
	       				<h3>Please help African<br> children make them<br> a better life.</h3>
	       				<div class="donate">
							<div class="button_donate">
								<a href="#">Donate Now</a>
							</div>
						</div>
		       		</div>
	       		</div>
	     	</div>
	</div>
</div>


<div class="campaigns">
	<div class="container">
		<div class="row">
			<div class="title">
				<h3>Campaign Urgent! We Need Your Help.</h3>
				<p>Children are waiting for your help...</p>
			</div>
			<div id="sync1" class="owl-carousel owl-theme">
				<div class="item">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="images/i9.jpg" alt="">
							</div>
							<div class="img-2">
								<img src="images/95_camp.png" alt="">
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="pages/campaigns/campaigns-detail.php">Education for the Children</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
								<p>57 Day left</p>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="images/i11.jpg" alt="">
							</div>
							<div class="img-2">
								<img src="images/95_camp.png" alt="">
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="pages/campaigns/campaigns-detail.php">Education for the Children</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
								<p>57 Day left</p>
							</div>
							<div class="raised">
								<p><span>$32,583</span> Raised of <b>$4879</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="images/i12.jpg" alt="">
							</div>
							<div class="img-2">
								<img src="images/95_camp.png" alt="">
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="pages/campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
								<p>57 Day left</p>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="images/i13.jpg" alt="">
							</div>
							<div class="img-2">
								<img src="images/95_camp.png" alt="">
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="pages/campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
								<p>57 Day left</p>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="images/i14.jpg" alt="">
							</div>
							<div class="img-2">
								<img src="images/95_camp.png" alt="">
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="pages/campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
								<p>57 Day left</p>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="images/i15.jpg" alt="">
							</div>
							<div class="img-2">
								<img src="images/95_camp.png" alt="">
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="pages/campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
								<p>57 Day left</p>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="weneed">
	 <div class="container">
	 	<div class="row">
	 		<div class="content-inner">
	 			<div class="content">
	 				<h2 class="title">
	 					<span>We need your help!</span>
	 				</h2>
	 				<div class="desc">
	 					<p style="font-size: 24px;">To bring relief when & Where it's needed most</p>
	 					<p> Yerramma rests after a mile walk carrying Lalitha on her hip and this heavy container of water on her head. Thanks to a new well drilled by OBI teams however, this young family will now have safe access to clean water.</p>
	 				</div>
	 			</div>
	 			<div class="donate">
					<div class="button_donate">
						<a href="#">Donate Now</a>
					</div>
				</div>
	 		</div>
	 	</div>
	 </div>
</div>
<div class="meet">
	<div class="container">
		<div class="row">
			<div class="title">
				<h3>Meet Our <b>Volunteers</b></h3>
			</div>
			<div id="sync2" class="owl-carousel owl-theme">
				<div class="item">
					<div class="img">
						<img src="images/v1.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a><br>
								<a href=""><i class="fa fa-instagram"></i></a>
							</span>
						</div>
					</div>
					<div class="text_show">
						<h3><a href="#">Michale Blacksun</a></h3>
						<p>Duis elentum sapien neque  Habitant morbi trique</p>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="images/v2.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a><br>
								<a href=""><i class="fa fa-instagram"></i></a>
							</span>
						</div>
					</div>
					<div class="text_show">
						<h3><a href="#">Gareth Sougate</a></h3>
						<p>Duis elentum sapien neque  Habitant morbi trique</p>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="images/v3.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a><br>
								<a href=""><i class="fa fa-instagram"></i></a>
							</span>
						</div>
					</div>
					<div class="text_show">
						<h3><a href="#">Michale Blacksun</a></h3>
						<p>Duis elentum sapien neque  Habitant morbi trique</p>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="images/v4.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a><br>
								<a href=""><i class="fa fa-instagram"></i></a>
							</span>
						</div>
					</div>
					<div class="text_show">
						<h3><a href="#">Jessica Albalis</a></h3>
						<p>Duis elentum sapien neque  Habitant morbi trique</p>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="images/v5.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a><br>
								<a href=""><i class="fa fa-instagram"></i></a>
							</span>
						</div>
					</div>
					<div class="text_show">
						<h3><a href="#">Maria Okazaki</a></h3>
						<p>Duis elentum sapien neque  Habitant morbi trique</p>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="images/v2.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a><br>
								<a href=""><i class="fa fa-instagram"></i></a>
							</span>
						</div>
					</div>
					<div class="text_show">
						<h3><a href="#">Tran Tuan Tu</a></h3>
						<p>Duis elentum sapien neque  Habitant morbi trique</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php include("footer.php") ?>

	
