<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>


<style>
		#cover2 {
			background-image: url('../images/formpic.jpeg');
		}
		#registerheader {
			background-color: #f0f0f0;
		}
	/* #regbody{
		/* background-image: url('../images/backpic.jpeg'); */
		
	 

	</style>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
		    
		    <?php display_message(); ?>


			<?php validate_user_registration(); ?>

		</div>
</div>

    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div id="registerheader" class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="">Register</a>
							</div>
						</div>
						<hr>

						<label>
						<div class="dropdown">
    <button style="background-color:white; width:120px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span style="color:black;"><b>Register As</b></span>
    <span style="color:black;" class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Charity</a></li>
      <li><a href="#">Volunteer</a></li>
    </ul>
  </div>
</div>
</label>


					</div>
					<div style="background-color:#80a7d8; margin-top:-22px;" class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" >

									<div class="form-group">
										<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Phone no" value="" required >
									</div>
									<div class="form-group">
										<input type="email" name="email" id="register_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required >
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input style="background-color:orange;" type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div class="footer">
	<div class="container">	
		<div class="row">
			<div class="footer-1">
				<div class="item col-md-4">
					<div class="title">
						<h3>Useful Links</h3>
					</div>
					<ul class="us1">
						<li><a href="#">Donation History</a></li>
						<li><a href="#">Our Mission</a></li>
						<li><a href="#">Donation Histoty</a></li>
						<li><a href="#">Our Leadership</a></li>
						<li><a href="#">Public Reporting</a></li>
						<li><a href="#">Media Library</a></li>
						<li><a href="#">Sign in</a></li>
					</ul>
				</div>
				<div class="item1 col-md-4">
					<div class="title">
						<h3> Newsletter</h3><br>
					</div>
					<input type="text" name="name" placeholder="Your email address...">
					<div class="donate">
						<div class="button_donate">
							<a href="#">Subscrible</a>
						</div>
					</div>
				</div>
				<div class="item3 col-md-4">
					<div class="title">
						<a><img src="../images/logo-footer.png" alt=""></a>
					</div>
					<div class="pz">
						<p>Lorem ipsum dolor sit amet conseteturop sapscing elitre sed diam eimod tempores einvidunt labore voluptua dolores.</p>
					</div>
					<ul class="contact-info">
						<li><span><i class="fa fa-home" aria-hidden="true"></i>#8/2, Novel Office Central, <br><div style="margin-left:29px;"> Diagonally Opposite to 1MG Mall, <br>Ulsoor Road, Off M.G.Road, Bangalore-560042, Karnataka, India</div></span></li>
						<li><span><i class="material-icons">phone_iphone</i>080-43712524</span></li>
						<li><a><i class="fa fa-envelope-o"></i>info@oswintechnologies.com</a></li>
					</ul>
				</div>
			</div>
			<div class="copyright">
				<div class="social">
					<div class="social1">
						<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="oxy">
					<a href="#">My Charities</a>
					<a href="#">Terms of Use</a>
					<a href="#">Privacy Policy</a>
					<a href="#">Site Map  </a>
					<a href="#">About Us  </a>
					<a href="#">Contact Us  </a>
				</div>
				<div class="cpr">
					<p><span>CharityPlus.</span> All right Reserved</p>
				</div>
			</div>
		</div>
	</div>
</div>
