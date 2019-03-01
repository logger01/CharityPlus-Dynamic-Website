

<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "charity");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$text = mysqli_real_escape_string($db, $_POST['text']);

  	// image file directory
  	$target = "../../CharityDashboard/photos/".basename($image);

  	$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>



<?php include('../../otherheader.php'); ?>

<?php include('../pagesignupmodal.php'); ?>

<link rel="stylesheet" type="text/css" href="../../modalstyle.css">
<script src="../../modal.js"></script>




<div id="id01" class="modal1">
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

<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url(../../images/charity5.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="content">
			<div class="ct">
				<h2 class="title">
					<span>Your kindness might help lots of people have better lives.</span>
				</h2>
			</div>
		</div>
	</div>
</div>
<div class="campaigns">
	<div class="container">
		<div class="row">
			<nav class="button_camp col-md-12">
				<ul>
					<li class="selected">
						<a href="#"><span>All Campaigns</span></a>
					</li>
					
			</nav>
			<div id="syncz" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					
				<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="z">
						<div class="img">
							<div class="img-1">
							<img src="../../images/i4.jpg" alt="">
							</div>
							<div class="img-2">
								<!-- <img src="../../images/62.png" alt=""> -->
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="../campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="../../images/i9.jpg" alt="">
							</div>
							<div class="img-2">
								<!-- <img src="../../images/35.png" alt=""> -->
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="../campaigns/campaigns-detail.php">Education for the Children</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
							</div>
							<div class="raised">
								<p><span>$32,583</span> Raised of <b>$4879</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="../../images/i11.jpg" alt="">
							</div>
							<div class="img-2">
								<!-- <img src="../../images/62.png" alt=""> -->
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="../campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="../../images/i2.jpg" alt="">
							</div>
							<div class="img-2">
								<!-- <img src="../../images/86.png" alt=""> -->
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="../campaigns/campaigns-detail.php">Education for the Children</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<img src="../../images/i3.jpg" alt="">
							</div>
							<div class="img-2">
								<!-- <img src="../../images/62.png" alt=""> -->
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="../campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
							</div>
							<div class="raised">
								<p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="z">
						<div class="img">
							<div class="img-1">
								<?php
    while ($row = mysqli_fetch_array($result)) {
      // echo "<div id='img_div'>";
      	echo "<img src='../../CharityDashboard/photos/".$row['image']."' >";
      	echo "<p>".$row['text']."</p>";
      // echo "</div>";
    }
  ?>
							</div>
							<div class="img-2">
								<!-- <img src="../../images/62.png" alt=""> -->
							</div>
						</div>
						<div class="ct">
							<div class="text_show">
								<h3><a href="../campaigns/campaigns-detail.php">Vocational training</a></h3>
								<p>Maecenas sed diam eget risus varius blandi amet non magna ullamcorper nulaon...</p>
							</div>
							<div class="donate">
								<div class="button_donate">
									<a href="#">Donate Now</a>
								</div>
							</div>
							<div class="raised">
								<p><span>
								<?php
								echo $row["id"];
								
								?>
									</span> Raised of <b>$78,324</b> Goal</p>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('../../login/includes/footer.php'); ?>

<script src="../../pages/about/jsfiles.js"></script>		


