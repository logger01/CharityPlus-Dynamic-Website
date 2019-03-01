<?php include("header.php") ?>

<?php 

	if(logged_in()) {
		redirect("CharityDashboard/index.php");
	}
  ?>
  
  

  <link rel="stylesheet" type="text/css" href="modalstyle.css">
<script src="modal.js"></script>

	<style>
	
		

.dropbut{
  margin-left:229px;
}

	</style>


<?php include("nav.php") ?>


      <!-- For login --> 
			<?php display_message(); ?>
      <?php validate_user_login(); ?>
      

      <!-- For registration-->

      <?php display_message(); ?>
      <?php validate_user_registration(); ?>

								
    	
					
	<div id="id01" class="modal1">
	<form class="modal-content1 animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="images/avatar.png" alt="Avatar" class="avatar">
	</div>

	<div id="optionbox" align="center">
	<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
 <option value="#">login as Admin</option>
 <option value="charity/login.php">Charity</option>
 <option value="volunteer/login.php">Volunteer</option>
</select>
</div>

  
		<div class="container">
		<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required>
	</div>
		<div class="form-group">
		<input type="password" name="password" id="login-password" tabindex="2" class="form-control" placeholder="Password" required>
	</div>
		<div class="form-group text-center">
		<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
		<label for="remember"> Remember Me</label>
	</div>
		<div class="form-group">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" style="background-color:#FA8072;" value="Log In">
	</div>
	</div>
	</div>
		<div class="form-group">
		<div class="row">
		<div class="col-lg-12">
		<div class="text-center">
		<a href="recover.php" tabindex="5" class="forgot-password"><span style="color:#F5FFFA;">Forgot Password?</span></a>
    <button id="regbutton2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
  </div>
   	</div>
	</div>
	</div>
	</div>
	</form>
  </div>
  

  <!--  signup modal  -->


	<div id="id02" class="modal" style="z-index: 10;">
	<form class="modal-content animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="images/avatar.png" alt="Avatar" class="avatar">
    </div>
    
    <div id="optionbox" align="center">
	<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
 <option value="#">Register as Admin</option>
 <option value="charity/login.php">Charity</option>
 <option value="volunteer/login.php">Volunteer</option>
</select>
</div>

  <div class="container">
		<input id="inputtext" type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" value="" required >
	</div>
		<div class="container">
		<input id="inputtext" type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="" required >
	</div>
		<div class="container">
		<input id="inputtext" type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Phone no" value="" required >
	</div>
		<div class="container">
		<input id="inputtext" type="email" name="email" id="register_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required >
	</div>
		<div class="container">
		<input id="inputtext" type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
	</div>
		<div class="container">
		<input id="inputtext" type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
	</div>
		<div class="container">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
	    <input id="regbutton" style="background-color:orange;" type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
	</div>
	</div>
	</div>
	</form>
	</div>
  
  <!-- End of signup modal -->

								
							
  <div id="main" class="slideshow">
	<div id="sync10" class="owl-carousel owl-theme">
	     	<div class="item" style="background-image: url(images/vocational1.jpg); width: 100%;">
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
	     	<div class="item" style="background-image: url(images/charity3.jpg); width: 100%;">
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
								<img src="images/charity1.jpg" alt="">
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
								<img src="images/charity2.jpg" alt="">
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
								<img src="images/charity3.jpg" alt="">
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
								<img src="images/charity4.jpg" alt="">
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
								<img src="images/charity5.jpg" alt="">
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
								<img src="images/vol1.jpg" alt="">
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
						<img src="images/vol2.jpg" alt="">
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
						<img src="images/vocational1.jpg" alt="">
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
						<img src="images/p2.jpg" alt="">
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
						<img src="images/p1.jpg" alt="">
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
						<img src="images/p4.jpg" alt="">
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
						<img src="images/p5.jpg" alt="">
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

                    
  
  
  
  <br><br><br><br>
			
	<?php include("footer.php") ?>
