
	<?php include('../../otherheader.php'); ?>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

	
<style>

#center1{
	margin-left: 400px;
}
#us{
	margin-right: 350px;
}

/*  for the login modal */
#idtext {
  width: 53%;
  padding: 20px;
  text-align: left;
  margin-right: 507px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: white;
}
#idpassword {
  width: 91.5%;
  padding: 20px;
  text-align: left;
  margin-right: 27px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: white;
}

/* Set a style for all buttons */
button {
  background-color: #fbb122;
  color: white;
  padding: 4px 12px 4px;
  margin: -2px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-left: 15px;
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
  margin: 3px 0 12px 0;
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
  z-index: 10; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
  padding-top: 80px;
}

/* Modal Content/Box */
.modal-content1 {
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
  color: #e0ffff;
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
  animation: animatezoom 0.6s;
}

@-webkit-keyframes animatezoom {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
}

@keyframes animatezoom {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
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

#menus {
  margin-left: 250px;
}
#buttonn {
  margin-left: 0;
}

/*  For signupmodal style */

#inputtext {
  width: 53%;
  padding: 18px;
  text-align: left;
  margin-left: -506px;
  display: inline-block;
  border: 1px solid #ccc;
	box-sizing: border-box;
	background-color:white;
}

input[type="password"] {
  width: 91.5%;
  padding: 20px;
  text-align: left;
  margin-left: 27px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

#regbutton {
  width: 53%;
  padding: 3px;
  text-align: center;
  margin-left: -467px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #fbb122;
  color: white;
  padding: 4px 12px 4px;
  margin: -2px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-left: 15px;
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
  margin: 3px 0 12px 0;
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
  z-index: 10; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0, 0, 0); /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
  padding-top: 80px;
}

/* Modal Content/Box */
.modal-content {
  background-color: teal;
  margin: -2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 20px;
  top: 0;
  color: #e0ffff;
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
  animation: animatezoom 0.6s;
}

@-webkit-keyframes animatezoom {
  from {
    -webkit-transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
  }
}

@keyframes animatezoom {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
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

	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/styles.css">


	
	<link rel="stylesheet" type="text/css" href="form.css" />


<script src="../../modal.js"></script>
<?php include('../pagesignupmodal.php'); ?>



<div id="id01" class="modal" style="z-index:1;">
	<form class="modal-content1 animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="../../images/avatar.png" alt="Avatar" class="avatar">
	</div>

	<div class="dropdown"> 
    <button id="buttonn" style="background-color:white; width:197px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span style="color:black;">Login as Admin</span>
    <span style="color:black;" class="caret"></span></button>
	<ul id="menus" class="dropdown-menu">
      <li><a href="#">Charity</a></li>
      <li><a href="#">Volunteer</a></li>
	</ul>
	</div>
	

		<div class="container">
		<input id="idtext" type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required>
	</div>
		<div class="form-group">
		<input id="idpassword" type="password" name="password" id="login-password" tabindex="2" class="form-control" placeholder="Password" required>
	</div>
		<div class="form-group text-center">
		<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
		<label for="remember"><span style="padding-top:0;"> Remember Me</span></label>
	</div>
		<div class="form-group">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" style="background-color:#FA8072; width:233px;" value="Log In">
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

<div id="center1">
<div class="contact-title">
<h1 id="us">Contact Us</h1>
</div>

<div class="contact-form">
<form id="contact-form" method="POST" action="contact-handler.php">
<input name="name" type="text" class="form-control" placeholder="Your Name" required>
<br>
<input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>

<input type="submit" class="form-control submit" value="SEND MESSAGE">
</form>
</div>
</div>

</div>



<br><br>

			<div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="item1" style="background-color: #5B84CE;">
					<div class="heightlight_icon" style="color: #5B84CE;">
						 <i class="fa fa-diamond" aria-hidden="true"></i>
					</div>
					<div class="heightlight_content">
						<div class="desc">
							 <p>596 Bernardo Center Bros, Suite 550<br>Los Angeles, CA 932643
							 </p>
						</div>
					</div>
				</div>
			</div>
			<div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="item1" style="background-color: #9AD064;">
					<div class="heightlight_icon" style="color: #9AD064;">
						 <i class="fa fa-diamond" aria-hidden="true"></i>
					</div>
					<div class="heightlight_content">
						<div class="desc">
							<p>Line 01: <strong>+849 123 456 789</strong><br>Line 02: <strong>+849 987 654 321</strong></p>
						</div>
					</div>
				</div>
			</div>
			<div class="gsc-column col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="item1" style="background-color: #EA9E3D;">
					<div class="heightlight_icon" style="color: #EA9E3D;">
						 <i class="fa fa-diamond" aria-hidden="true"></i>
					</div>
					<div class="heightlight_content">
						<div class="desc">
							 <p>Contact@CharityPlus.com<br>Infor@CharityPlus.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
<br><br>

<div align="center">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15551.796588741816!2d77.619541!3d12.9751044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8db72bf7edbf732a!2sNovel+Office!5e0!3m2!1sen!2sin!4v1549623249880" width="1300" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<!-- <div id="map" style="width:100%;height:600px"></div> -->

<!-- <script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.508742, -0.120850),
    zoom: 7,
    zoomControl: true,
    zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL}
  };
  var map = new google.maps.Map(mapCanvas ,mapOptions);
}
</script> -->


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
						<a><img src="../../images/logo-footer.png" alt=""></a>
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
					<a href="about-us.php">About Us  </a>
					<a href="#">Contact Us  </a>
				</div>
				<div class="cpr">
					<p><span>CharityPlus.</span> All right Reserved</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="../../pages/about/jsfiles.js"></script>		

</body>
</html>