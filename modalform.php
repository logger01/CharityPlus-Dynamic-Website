
<div id="id01" class="modal1">
	<form class="modal-content1 animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="images/avatar.png" alt="Avatar" class="avatar">
	</div>
            
  
  <div id="optionbox" align="center">
	<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
 <option value="#">Login as Admin</option>
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