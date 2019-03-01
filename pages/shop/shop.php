<?php include('../../otherheader.php'); ?>

<?php include('../pagesignupmodal.php'); ?>

<link rel="stylesheet" type="text/css" href="../../modalstyle.css">
<script src="../../modal.js"></script>



<div id="id01" class="modal1">
	<form class="modal-content1 animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="../../images/avatar.png" alt="Avatar" class="avatar">
	</div>

	<div id="optionbox" align="center">
	<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
 <option value="#">Login as Admin</option>
 <option value="../../charity/login.php">Charity</option>
 <option value="../../volunteer/login.php">Volunteer</option>
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

<div class="bg_full_cp">
	<div class="bg_full" style="background-image: url(../../images/i20.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>Shop</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.php">Home</a>
					<span> / Shop</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shop">
	<div class="container">
		<div class="row">
			<div class="list-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s1.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s2.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s3.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s4.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s5.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s6.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s1.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s4.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s2.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s3.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s5.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="item_product">
						<div class="image_cart">
							<div class="image_i">
								<img src="../../images/s6.jpg">
							</div>
							<div class="image_hover">
								<div class="icon_hover">
									<a class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
									<a class="icon"><i class="fa fa-arrows" aria-hidden="true"></i></a>
								</div>
								<div class="star_shop">
									<img src="../../images/shop_star_hover.png">
								</div>
							</div>
						</div>
						<div class="content_cart">
							<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
							<div class="price">
								<span>$280.00</span>
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

<script src="../../jsfiles.js"></script>		

</body>
</html>