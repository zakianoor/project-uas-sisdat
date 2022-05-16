<?php 
    $title = "Our Products";
    
    if (!isset($_SESSION)) 
    {
        session_start();
    }
	$id_buyer = $_SESSION['id_buyer'];

    require "config/connect.php"; 
	
    if(isset($_GET['filter'])) 
    {
        $query = mysqli_query($connect, "SELECT * FROM barang WHERE id_kategori = '".$_GET['filter']."'");
        $data = mysqli_fetch_assoc($query);
    }
	else
	{
        $query = mysqli_query($connect, "SELECT * FROM barang ORDER BY id_kategori DESC");
        $data = mysqli_fetch_assoc($query);
	}
	
	if(isset($_POST['add_to_cart']))
	{
	   $nama_brg = $_POST['nama_brg'];
	   $harga_brg = $_POST['harga_brg'];
	   $img_brg = $_POST['img_brg'];
	   $product_quantity = 1;
	
	   $select_cart = mysqli_query($connect, "SELECT * FROM cart WHERE nama_brg = '$nama_brg'");
	
	   if(mysqli_num_rows($select_cart) > 0)
	   {
		  $message = 'Product already added to cart';
	   }
	   else
	   {
		  $insert_product = mysqli_query($connect, "INSERT INTO cart (nama_brg, harga_brg, img_brg, qyt_brg) VALUES('$nama_brg', '$harga_brg', '$img_brg', '$product_quantity')");
		  $message = 'Product added to cart succesfully';
	   }
	
	}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?=$title." | ".WEBNAME;?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?=BASE_URL;?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=BASE_URL;?>asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="<?=BASE_URL;?>asset/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?=BASE_URL;?>asset/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?=BASE_URL;?>asset/js/move-top.js"></script>
<script type="text/javascript" src="<?=BASE_URL;?>asset/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>   
<?php

?>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="index.php">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Sign In</a></li>
								<li><a href="regist.php">Sign Up</a></li>
								<li><a href="logout.php">Sign Out</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="">Contact Us</a></h2>
		</div>
		<div class="w3l_header_rightc">
			<header class="header-cart">
				<?php
					$select_rows = mysqli_query($connect, "SELECT * FROM cart") or die("query failed");
					$row_count = mysqli_num_rows($select_rows);
				?>
			</header>
			<a href="cart.php" class="cart">Cart <span><?php echo $row_count; ?></span>
								<img src="asset/images/cart.png" alt=" "/></a>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<img src="asset/images/logo.png" alt=" "/>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li>Hi, <?php echo $_SESSION['usn'];?>!<span>|</span></li>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li><?=$title?></li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
	<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
			  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav nav_1">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown mega-dropdown active">
						<a href="products.php" class="dropdown-toggle" data-toggle="dropdown">Our Products<span class="caret"></span></a>				
						<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
									<?php
										$Qkategori = mysqli_query($connect, "SELECT * FROM kategori");
										$kategori = mysqli_fetch_assoc($Qkategori);
										do 
										{
													
									?>
										<li><a href="?filter=<?=$kategori['id_kategori'];?>"><?=$kategori['nama_kategori'];?></a></li>
									<?php
										}while($kategori = mysqli_fetch_assoc($Qkategori));
									?>
									</ul>
								</div>                  
							</div>			
					</li>
					<li><a href="">Testimony</a></li>
				</ul>
			 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner8">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
				<?php
					do
					{		
				?>
					<div class="agileinfo_single">
						<h5><?=$data['nama_brg'];?></h5>
						<div class="col-md-4 agileinfo_single_left" >
							<img src="<?=BASE_URL;?>assets/img_brg/<?=$data['img_brg'];?>" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-8 agileinfo_single_right">
							<div class="w3agile_description">
								<h4>Description :</h4>
								<p><?=$data['ket_brg'];?></p>
							</div>
							<div class="snipcart-item block">
								<div class="snipcart-thumb agileinfo_single_right_snipcart">
									<h4>Rp<?=number_format($data['harga_brg']);?>,-</h4>
								</div>
								<div class="snipcart-details agileinfo_single_right_details">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="nama_brg" value="<?php echo $data['nama_brg'];?>"/>
											<input type="hidden" name="harga_brg" value="<?php echo $data['harga_brg'];?>"/>
          									<input type="hidden" name="img_brg" value="<?php echo $data['img_brg']; ?>">
											<input type="hidden" name="currency_code" value="IDR"/>
											<input type="submit" name="add_to_cart" value="Add to cart" onclick="return confirm('<?=$message;?>')" class="button"/>
										</fieldset>
										<!--
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="pulao basmati rice" />
											<input type="hidden" name="amount" value="21.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
										-->
									</form>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>		
				<?php
					}
					while($data = mysqli_fetch_assoc($query));
				?>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<?php 
    require "include/footer.php";
?>