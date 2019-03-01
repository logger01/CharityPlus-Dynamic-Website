<div id="id02" class="modal" style="z-index: 10;">
	<form class="modal-content animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="../../images/avatar.png" alt="Avatar" class="avatar">
    </div>
    
    <div class="dropdown"> 
    <button id="buttonn" style="background-color:white; width:197px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span style="color:black;">Register as Admin</span>
    <span style="color:black;" class="caret"></span></button>
	<ul id="menus" class="dropdown-menu">
      <li><a href="#">Charity</a></li>
      <li><a href="#">Volunteer</a></li>
	</ul>
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