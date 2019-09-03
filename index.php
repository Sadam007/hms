<?php
include('db.php');
?>
<!-- Header starts -->
<?php require_once("includes/header.php") ?>
<!-- Header Ends -->
<div class="banner-top">
	<?php include_once("includes/social.php"); ?>
	<div class="contact-bnr-w3-agile">
		<?php include_once("includes/topHeader.php"); ?>
	</div>
	<div class="clearfix"></div>
</div>
<div class="w3_navigation">
	<?php include_once("includes/mainMenu.php"); ?>
</div>
<!-- //header -->
<!-- banner -->
<div id="home" class="w3ls-banner">
	<!-- banner-text -->
	<div class="slider">
		<?php include_once("includes/slider.php"); ?>
		<div class="clearfix"> </div>
		<!--banner Slider starts Here-->
	</div>
	<div class="thim-click-to-bottom">
		<a href="#rooms" class="scroll">
			<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
		</a>
	</div>
</div>	
<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<!-- Modal1 -->
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>SUN  <span>RISE</span></h4>
				<img src="images/1.jpg" alt=" " class="img-responsive">
				<h5>We know what you love</h5>
				<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->

<!-- banner-bottom -->
<div class="banner-bottom" id="facilites">
	<div class="container">	
		<div class="agileits_banner_bottom">
			<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
		</div>
		<div class="w3ls_banner_bottom_grids">
			<ul class="cbp-ig-grid">
				<li>
					<div class="w3_grid_effect">
						<span class="cbp-ig-icon w3_road"></span>
						<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
						<span class="cbp-ig-category">SUN RISE</span>
					</div>
				</li>
				<li>
					<div class="w3_grid_effect">
						<span class="cbp-ig-icon w3_cube"></span>
						<h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
						<span class="cbp-ig-category">SUN RISE</span>
					</div>
				</li>
				<li>
					<div class="w3_grid_effect">
						<span class="cbp-ig-icon w3_users"></span>
						<h4 class="cbp-ig-title">LARGE CAFE</h4>
						<span class="cbp-ig-category">SUN RISE</span>
					</div>
				</li>
				<li>
					<div class="w3_grid_effect">
						<span class="cbp-ig-icon w3_ticket"></span>
						<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
						<span class="cbp-ig-category">SUN RISE</span>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
 
<div class="advantages" id="services">
	<div class="container">
		<div class="advantages-main">
			<h3 class="title-w3-agileits">Our Services</h3>
			<div class="advantage-bottom">
				<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
					<div class="advantage-block ">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h4>Stay First, Pay After! </h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
						<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
						<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>

					</div>
				</div>
				<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
					<div class="advantage-block">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<h4>24 Hour Restaurant</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
						<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
						<p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->

<!-- rooms & rates -->
<div class="plans-section" id="rooms">
	<div class="container">
		<h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
		<div class="priceing-table-main">
			<div class="col-md-3 price-grid">
				<div class="price-block agile">
					<div class="price-gd-top">
						<img src="images/r1.jpg" alt=" " class="img-responsive" />
						<h4>Deluxe Room</h4>
					</div>
					<div class="price-gd-bottom">
						<div class="price-list">
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

							</ul>
						</div>
						<div class="price-selet">	
							<h3><span>Rs</span>5000</h3>						
							<a href="admin/reservation.php" >Book Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 price-grid ">
				<div class="price-block agile">
					<div class="price-gd-top">
						<img src="images/r2.jpg" alt=" " class="img-responsive" />
						<h4>Luxury Room</h4>
					</div>
					<div class="price-gd-bottom">
						<div class="price-list">
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
						</div>
						<div class="price-selet">
							<h3><span>Rs</span>3500</h3>
							<a href="admin/reservation.php" >Book Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 price-grid lost">
				<div class="price-block agile">
					<div class="price-gd-top">
						<img src="images/r3.jpg" alt=" " class="img-responsive" />
						<h4>Guest House</h4>
					</div>
					<div class="price-gd-bottom">
						<div class="price-list">
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
						</div>
						<div class="price-selet">
							<h3><span>Rs</span>2500</h3>
							<a href="admin/reservation.php" >Book Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 price-grid wthree lost">
				<div class="price-block agile">
					<div class="price-gd-top ">
						<img src="images/r4.jpg" alt=" " class="img-responsive" />
						<h4>Single Room</h4>
					</div>
					<div class="price-gd-bottom">
						<div class="price-list">
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
						</div>
						<div class="price-selet">
							<h3><span>Rs</span> 1500</h3>
							<a href="admin/reservation.php" >Book Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--// rooms & rates -->

<?php include_once("includes/footer.php"); ?>


