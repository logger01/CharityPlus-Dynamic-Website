<?php header('Location: ../CharityDashboard/volunteerdashboard.php'); ?>


<?php include("includes/header.php") ?>
<br><br><br><br><br><br><br><br><br><br>

   <?php include("includes/nav.php") ?>


	<div class="jumbotron">
		<h1 class="text-center"><?php 

    if(logged_in()){

      echo "Logged in";
    } else {

      redirect("index.php");
    }



    ?></h1>
	</div>







<!--  signup modal  -->



<div id="id02" class="modal" style="z-index: 10;">
	<form class="modal-content animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="../images/avatar.png" alt="Avatar" class="avatar">
    </div>
    
    <div id="optionbox" align="center">
	<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
 <option value="#">Register as Volunteer</option>
 <option value="../charity/login.php">Charity</option>
</select>
</div>


  <div class="container">
		<input id="inputtext" type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" value="" required >
  </div>
  <div class="container">
		<input id="inputtext" type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="" required >
	</div>
  <div class="container">
		<input id="inputtext" type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required >
	</div>
		<div class="container">
		<input id="inputtext" type="text" name="phone_no" id="phone_no" tabindex="1" class="form-control" placeholder="Phone No" value="" required >
	</div>
		<div class="container">
		<input id="inputtext" type="text" name="aadhar_no" id="aadhar_no" tabindex="1" class="form-control" placeholder="Aadhar Card No" value="" required >
	</div>
		<div class="container">
		<input id="inputtext" type="pan" name="pan" id="pan" tabindex="1" class="form-control" placeholder="Pan Card No" value="" required >
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

  


    <!-- Sign-in modal -->

					
	<div id="id01" class="modal1">
	<form class="modal-content1 animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="../images/avatar.png" alt="Avatar" class="avatar">
	</div>

  <div id="optionbox" align="center">
	<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
 <option value="#">Login as Volunteer</option>
 <option value="../charity/login.php">Charity</option>
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

  
	
	<link rel="stylesheet" type="text/css" href="../modalstyle.css">
<script src="../modal.js"></script>

<?php include("includes/footer.php") ?>