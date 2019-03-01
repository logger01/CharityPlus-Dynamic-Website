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