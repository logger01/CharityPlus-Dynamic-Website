<?php include('../../otherheader.php'); ?>

<style>
	#regbody{
		background-image: url('./images/backpic.jpg');
	}
</style>


<div id="regbody">
<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url(../../images/breadcrumb.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>Creat New Account</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.php">Home</a>
					<span> / Creat New Account</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page_login">
	<div class="container">
		<div class="row">
			<div class="login-content-inner">
				<div class="content-login">
					<div class="content-header">
						<ul>
							<li><a href="login.php">Log in</a></li>
							<li class="active"><a href="resister.php">Create new account</a></li>
							<li><a href="reset-pass.php">Reset your password</a></li>
						</ul>
					</div>
					<div class="content-main">
						<form>
							<div class="form-register-name">
								<div class="first_name">
									<input type="text" name="name" placeholder="First Name">
								</div>
								<div class="last_name">
									<input type="text" name="name" placeholder="Last Name">
								</div>
								<div class="user_name">
									<input type="text" name="name" placeholder="UserName">
								</div>
								<div class="description">
									<span>Several special characters are allowed, including space, period (.), hyphen (-), apostrophe ('), underscore (_), and the @ sign.</span>
								</div>
							</div>
							<div class="form-register-mail">
								<input type="text" name="pass" placeholder="Mail Address">
								<div class="description">
									<span>A valid email address. All emails from the system will be sent to this address. The email address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by email.</span>
								</div>
							</div>
							<div class="form-register-pass">
								<div>
									<input type="text" name="pass" placeholder="Choose a Password">
								</div>
								<div>
									<input type="text" name="pass" placeholder="Repeat the Password">
								</div>
							</div>
							<div class="form-item-submit">
								<input type="submit" name="submit" value="Creat New Acount">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>

<?php include('../../footer.php'); ?>

<script src="../../pages/about/jsfiles.js"></script>		

</body>
</html>