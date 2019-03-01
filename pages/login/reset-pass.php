<?php include('../../otherheader.php'); ?>

<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url(../../images/breadcrumb.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>Reset Your Password</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.php">Home</a>
					<span> / Reset Your Password</span>
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
							<li><a href="register.php">Create new account</a></li>
							<li class="active"><a href="">Reset your password</a></li>
						</ul>
					</div>
					<div class="content-main">
						<form>
							<div class="form-item-name">
								<label>Username or email address</label>
								<input type="text" name="name">
								<div class="description">
									<span>Password reset instructions will be sent to your registered email address.</span>
								</div>
							</div>
							<div class="form-item-submit">
								<input type="submit" name="submit" value="Submit">
							</div>
						</form>
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