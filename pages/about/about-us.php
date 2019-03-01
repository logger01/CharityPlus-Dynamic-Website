<?php include('../../otherheader.php'); ?>


<?php include('../pagesignupmodal.php'); ?>

<link rel="stylesheet" type="text/css" href="../../modalstyle.css">
<script src="../../modal.js"></script>



<style>

#justthis{
	margin-top:-148px;
}

#menus{
	margin-left: 250px;
	align: center;
}
#buttonn{
	margin-left: 230px;
}

/* Full-width input fields */
input[type=text] {
  width: 53%;
  padding: 20px;
  text-align: left;
  margin-left: 16px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=password] {
  width: 91.5%;
  padding: 20px;
  text-align: left;
  margin-left: 27px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #FBB122;
  color: white;
  padding: 4px 12px 4px;
  margin: -2px 0;
  border: none;
  cursor: pointer;
  width: 100%;
	margin-left:8px;
	border-radius: 15px;
  box-shadow: 0 3px brown;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 12px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 80px;
}

/* Modal Content/Box */
.modal-content {
  background-color: teal;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 20px;
  top: 0;
  color: #E0FFFF;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

	</style>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


		<div id="id01" class="modal" style="z-index: 5;">
									<form class="modal-content animate"  method="post">
									<div class="imgcontainer">
									<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
									<img src="../../images/avatar.png" alt="Avatar" class="avatar">
									</div>

									<div class="dropdown"> 
    <button id="buttonn" style="background-color:white; width:197px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span style="color:black;">Log in Admin</span>
    <span style="color:black;" class="caret"></span></button>
	<ul id="menus" class="dropdown-menu">
      <li><a href="#">Charity</a></li>
      <li><a href="#">Volunteer</a></li>
	</ul>
  </div>
											<div class="container">
											<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required>
										</div>
										<div class="form-group">
											<input type="password" name="password" id="login-
											password" tabindex="2" class="form-control" placeholder="Password" required>
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


<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url(../../images/bg1.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>About Us</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.php">Home</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="who-about">
	<div class="container">
		<div class="row">
			<div class="about_left col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="content-inner">
					<div class="content">
						<h2 class="title">
							<span><strong>Who</strong> We Are ?</span>
						</h2>
						<div class="desc">
							<p>ArrayLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna aliqua. </p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis. Riber tempor soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</p>
						</div>
					</div>
					<div class="button-readmore">
						<div class="button_donate">
							<a href="#">Readmore</a>
						</div>
					</div>
				</div>
			</div>
			<div class="about_right col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="content">
					<img src="../../images/i1.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="home4_help">
	<div class="container">
		<div class="row">
			<div class="gsc-heading">
				<h2 class="title">
					<span>
						How Can You <strong>Help ?</strong>
					</span>
				</h2>
			</div>
			<div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="gsc-image-content">
					<div class="image">
						<a href=""><img src="../../images/i2.jpg" alt=""></a>
					</div>
					<div class="content">
						<h4 class="title">
							<a>
								<i class="material-icons">card_giftcard</i>Make  a Gift
							</a>
						</h4>
						<div class="desc">
							<p>Proin porta facilisis pretium. Elements sapien  mentm sapien neque lobortis laoreet</p>
						</div>
						<div class="readmore">
							<div class="button_donate green">
								<a href="#">Join us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="gsc-image-content">
					<div class="image">
						<a href=""><img src="../../images/i3.jpg" alt=""></a>
					</div>
					<div class="content">
						<h4 class="title">
							<a>
								<i class="material-icons">favorite_border</i>Become a Volunteer
							</a>
						</h4>
						<div class="desc">
							<p>Proin porta facilisis pretium. Elements sapien  mentm sapien neque lobortis laoreet</p>
						</div>
						<div class="readmore">
							<div class="button_donate green">
								<a href="#">Join us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="gsc-image-content">
					<div class="image">
						<a href=""><img src="../../images/i4.jpg" alt=""></a>
					</div>
					<div class="content">
						<h4 class="title">
							<a>
								<i class="material-icons">attach_money</i>Send Donation
							</a>
						</h4>
						<div class="desc">
							<p>Proin porta facilisis pretium. Elements sapien  mentm sapien neque lobortis laoreet</p>
						</div>
						<div class="readmore">
							<div class="button_donate green">
								<a href="#">Join us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="justthis" class="meet">
	<div class="container">
		<div class="row">
			<div class="title">
				<h3>Meet Our <b>Volunteers</b></h3>
			</div>
			<div id="sync2" class="owl-carousel owl-theme">
				<div class="item">
					<div class="img">
						<img src="../../images/i5.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a>
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
						<img src="../../images/i6.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a>
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
						<img src="../../images/i7.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a>
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
						<img src="../../images/i8.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a>
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
						<img src="../../images/i9.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a>
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
						<img src="../../images/i10.jpg" alt="">
						<div class="social">
							<span>
								<a href=""><i class="fa fa-facebook"></i></a><br>
								<a href=""><i class="fa fa-twitter"></i></a><br>
								<a href=""><i class="fa fa-dribbble"></i></a><br>
								<a href=""><i class="fa fa-google-plus"></i></a>
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
</div>


<div class="people_say">
	<div class="container">
		<div class="row">
			<div class="wrap">
				<div class="title">
					<h3>What people <b>Say?</b></h3>
				</div>
				<div id="sync4" class="owl-carousel owl-theme">
					<div class="item">
						<p><span>"</span> I go to many land, meet many people and know that there are many<br> poor people that need our help. <span>"</span></p>
						<h4>John Doe</h4>
						<p class="l">Ceo of MediaLeak - <a href="#">www.medialeak.com</a></p>
					</div>
					<div class="item">
						<p><span>"</span> I go to many land, meet many people and know that there are many<br> poor people that need our help. <span>"</span></p>
						<h4>John Doe</h4>
						<p class="l">Ceo of MediaLeak - <a href="#">www.medialeak.com</a></p>
					</div>
					<div class="item">
						<p><span>"</span> I go to many land, meet many people and know that there are many<br> poor people that need our help. <span>"</span></p>
						<h4>John Doe</h4>
						<p class="l">Ceo of MediaLeak - <a href="#">www.medialeak.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tt_images" style="padding-bottom: 100px; background-color: #EFF1F2;">
	<div class="container">
		<div class="row">
			<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="content_block">
					<span class="zmdi zmdi-favorite-outline" style="color: #ff9800;"></span>
					<h3 class="i1" style="color: #ff9800;">60,875</h3>
					<p>Volunteer Helper</p>
				</div>
			</div>
			<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="content_block">
					<span class="zmdi zmdi-card-giftcard" style="color: rgb(139, 202, 78);"></span>
					<h3 class="i2" style="color: rgb(139, 202, 78);">682,345</h3>
					<p>Donated</p>
				</div>
			</div>
			<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="content_block">
					<span class="zmdi zmdi-mood" style="color: #fec501;"></span>
					<h3 class="i3" style="color: #fec501;">28,374</h3>
					<p>Happy Children</p>
				</div>
			</div>
			<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="content_block">
					<span class="zmdi zmdi-library" style="color: #5586e8;"></span>
					<h3 class="i4" style="color: #5586e8;">589</h3>
					<p>Products & Gifts</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('../../login/includes/footer.php'); ?>

<script src="../../pages/about/jsfiles.js"></script>		

</body>
</html>