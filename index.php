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
							<h3>For Every <span> Flavour, </span> A Story to Tell</h3>
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
				<img src="asset/images/kiri.png" alt=" " class="img-responsive">

			</div>
		</div>
		<div class="col-md-4 wthree_banner_bottom_left">
			<div class="wthree_banner_bottom_left_grid">
				<img src="asset/images/tengah.png" alt=" " class="img-responsive">

			</div>
		</div>
		<div class="col-md-4 wthree_banner_bottom_left">
			<div class="wthree_banner_bottom_left_grid">
				<img src="asset/images/kanan.png" alt=" " class="img-responsive">

			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>

<?php 
    require "include/footer.php";
?>