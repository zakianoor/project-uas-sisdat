<?php 
    $title = "Home";

    require "include/header.php";

?>
		</nav>
	</div>
	<div class="w3l_banner_nav_right">
		<section class="slider">
			<div class="flexslider">
						<div class="w3l_banner_nav_right_banner">
							<h3>Make your <span>food</span> with Spicy.</h3>
							<div class="more">
								<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
			</section>
			<!-- flexSlider -->
			<link rel="stylesheet" href="asset/css/flexslider.css" type="text/css" media="screen" property="">
			<script defer="" src="<?=BASE_URL;?>asset/js/jquery.flexslider.js"></script>
			<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		  </script>
		<!-- //flexSlider -->
	</div>
	<div class="clearfix"></div>
</div>
<div class="banner_bottom">
	<div class="wthree_banner_bottom_left_grid_sub">
	</div>
	<div class="wthree_banner_bottom_left_grid_sub1">
		<div class="col-md-4 wthree_banner_bottom_left">
			<div class="wthree_banner_bottom_left_grid">
				<img src="asset/images/4.jpg" alt=" " class="img-responsive">
				<div class="wthree_banner_bottom_left_grid_pos">
					<h4>Discount Offer <span>25%</span></h4>
				</div>
			</div>
		</div>
		<div class="col-md-4 wthree_banner_bottom_left">
			<div class="wthree_banner_bottom_left_grid">
				<img src="asset/images/5.jpg" alt=" " class="img-responsive">
				<div class="wthree_banner_btm_pos">
					<h3>introducing <span>best store</span> for <i>groceries</i></h3>
				</div>
			</div>
		</div>
		<div class="col-md-4 wthree_banner_bottom_left">
			<div class="wthree_banner_bottom_left_grid">
				<img src="asset/images/6.jpg" alt=" " class="img-responsive">
				<div class="wthree_banner_btm_pos1">
					<h3>Save <span>Upto</span> $10</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>

<?php 
    require "include/footer.php";
?>