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
	<div class="bg_full" style="background-image: url(../../images/i6.jpg); background-repeat: no-repeat; background-position: center center;">
		<div class="container">
			<div class="ct">
				<h2 class="page_title">
					<span>Shop SideBar Left</span>
				</h2>
				<div class="breadcrumb-links">
					<a href="../../index.php">Home</a>
					<span> / Shop SideBar Left</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shop">
	<div class="container">
		<div class="row">

			<div class="sitebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="categories">
					<h3 class="title">Categories</h3>
					<ul>
						<li><a href="">Business Agency</a></li>
						<li><a href="">Web Design</a></li>
						<li><a href="">Health</a></li>
						<li><a href="">Graphic Design</a></li>
						<li><a href="">Lifestyle</a></li>
						<li><a href="">PSD Template</a></li>
						<li><a href="">Wordpress</a></li>
						<li><a href="">Photography</a></li>
					</ul>
				</div>
				<div class="by_price">
					<h3 class="title">By Price</h3>
					<div class="price">
						<img src="../../images/p2.jpg" alt="">
						<div class="cc"><p>Price: <span>$20.00 - $1800.00</span></p></div>
					</div>
				</div>
				<div class="top_favorite">
					<h3 class="title">Top Favorite</h3>
					<div class="fav_item">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p3.jpg" alt="">
								</div>
							</div>
							<div class="content_cart">
								<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
								<img src="../../images/p1.jpg" alt="">
								<div class="price">
									<span>£89.99</span>
								</div>
							</div>
						</div>
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p4.jpg" alt="">
								</div>
							</div>
							<div class="content_cart">
								<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
								<img src="../../images/p3.jpg" alt="">
								<div class="price">
									<span>£89.99</span>
								</div>
							</div>
						</div>
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p5.jpg" alt="">
								</div>
							</div>
							<div class="content_cart">
								<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
								<img src="../../images/p4.jpg" alt="">
								<div class="price">
									<span>£89.99</span>
								</div>
							</div>
						</div>
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p1.jpg" alt="">
								</div>
							</div>
							<div class="content_cart">
								<h3 class="title"><a href="product-detail.php">Title of product here</a></h3>
								<img src="../../images/charity1.jpg" alt="">
								<div class="price">
									<span>£89.99</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="custom_blogs">
					<h3 class="title">Custom Blogs</h3>
					<p>You can create unlimited CMS Blocks with any HTML content and put them on side columns or the main center content in any position on any page.</p>
				</div>
			</div>
			<div class="list-item col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="row">
					<div class="product_left">
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p4.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p5.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p4.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p2.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p3.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p1.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p2.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/vol1.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/vol2.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/charity1.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/vocational1.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
					<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="item_product">
							<div class="image_cart">
								<div class="image_i">
									<img src="../../images/p2.jpg" alt="">
								</div>
								<div class="image_hover">
									<div class="icon_hover">
										<a class="icon"><i class="fa fa-shopping-cart"></i></a>
										<a class="icon"><i class="fa fa-heart-o"></i></a>
										<a class="icon"><i class="fa fa-refresh"></i></a>
										<a class="icon"><i class="fa fa-arrows"></i></a>
									</div>
									<div class="star_shop">
										<img src="../../images/shop_star_hover.png" alt="">
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
	</div>
</div>

<?php include('../../login/includes/footer.php'); ?>

<script src="../../jsfiles.js"></script>		

</body>
</html>