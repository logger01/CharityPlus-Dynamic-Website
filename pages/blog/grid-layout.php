<?php include('../../otherheader.php'); ?>
<?php include('../pagesignupmodal.php'); ?>

<link rel="stylesheet" type="text/css" href="../../modalstyle.css">
<script src="../../modal.js"></script>

<style>
	.regbutton22{
		margin-left:122px;
		margin-top:10px;
	}
	</style>


<div id="id01" class="modal1">
	<form class="modal-content1 animate"  method="post">
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
		<button id="regbutton2" class="regbutton22" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
	</div>
	</div>
	</div>
		<div class="form-group">
		<div class="row">
		<div class="col-lg-12">
		<div class="text-center">
		<a href="recover.php" tabindex="5" class="forgot-password"><span style="color:#F5FFFA;">Forgot Password?</span></a>
	</div>
   	</div>
	</div>
	</div>
	</div>
	</form>
	</div>

<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url(../../images/i20.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>Grid posts</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.php">Home</a>
					<span> / Grid posts</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="blogs_grid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="post-block">
							<div class="post-image">
								<a href=""><img src="../../images/i1.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<div class="post-title">
									<a href="blog-detail.php"><span>Server-Side Rendering</span></a>
								</div>
								<div class="post-meta">
									<span>
										<a href="">Life Style</a>
										<span> - 29 November 2015 </span>
									</span>
								</div>
								<div class="post-body">
									<p>Duis sit amet faucibus ipsum, ac aliquet urna. In hendrerit sit amet dolor</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="post-block">
							<div class="post-image">
								<a href=""><img src="../../images/i2.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<div class="post-title">
									<a href="blog-detail.php"><span>Coffeeshops continue to conquer</span></a>
								</div>
								<div class="post-meta">
									<span>
										<a href="">Life Style</a>
										<span> - 29 November 2015 </span>
									</span>
								</div>
								<div class="post-body">
									<p>Much of the work was done in the garage of a friend just around the corner, Bill Fernandez, who was still at Homestead High.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="post-block">
							<div class="post-image">
								<a href=""><img src="../../images/i3.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<div class="post-title">
									<a href="blog-detail.php"><span>Country big concert report</span></a>
								</div>
								<div class="post-meta">
									<span>
										<a href="">Life Style</a>
										<span> - 29 November 2015 </span>
									</span>
								</div>
								<div class="post-body">
									<p>Duis sit amet faucibus ipsum, ac aliquet urna. In hendrerit sit amet dolor</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="post-block">
							<div class="post-image">
								<a href=""><img src="../../images/i4.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<div class="post-title">
									<a href="blog-detail.php"><span>How the future could resemble</span></a>
								</div>
								<div class="post-meta">
									<span>
										<a href="">Life Style</a>
										<span> - 29 November 2015 </span>
									</span>
								</div>
								<div class="post-body">
									<p> Quisque egestas non magna ac tincidunt. Aenean laoreet commodo nulla, sed ultrices odio vehicula sit amet</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="post-block">
							<div class="post-image">
								<a href=""><img src="../../images/i5.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<div class="post-title">
									<a href="blog-detail.php"><span>Latest Fashion Trends 2016</span></a>
								</div>
								<div class="post-meta">
									<span>
										<a href="">Life Style</a>
										<span> - 29 November 2015 </span>
									</span>
								</div>
								<div class="post-body">
									<p>Duis sit amet faucibus ipsum, ac aliquet urna. In hendrerit sit amet dolor </p>
								</div>
							</div>
						</div>
					</div>
					<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="post-block">
							<div class="post-image">
								<a href=""><img src="../../images/i6.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<div class="post-title">
									<a href="blog-detail.php"><span>Uncovered amazing places</span></a>
								</div>
								<div class="post-meta">
									<span>
										<a href="">Life Style</a>
										<span> - 29 November 2015 </span>
									</span>
								</div>
								<div class="post-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac neque at mi elementum gravida et vitae elit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="pager">
				<ul class="pager-item">
					<li class="selected"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">Next</a></li>
					<li><a href="">Last</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<?php include('../../login/includes/footer.php'); ?>

<script src="../../pages/about/jsfiles.js"></script>		

</body>
</html>