<?php 
    $title = "Sign In";
    require "config/connect.php"; 
	session_start();
    $error = "";

    if(isset($_POST['login'])) 
    {
        $usn = $_POST['usn'];
        $pass = MD5($_POST['pass']);    //password dienkripsi

		$result = mysqli_query($connect, "SELECT * FROM buyer WHERE usn_buyer = '$usn' && pass_buyer = '$pass'");
        $row = mysqli_num_rows($result);

        if($row == 1)
        {
			$row = mysqli_fetch_assoc($result);
			$id_buyer = $row['id_buyer'];
			$_SESSION['usn'] = $usn;
			$_SESSION['id_buyer'] = $id_buyer;
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'>";
        }
		else
		{
            $error = "Failed Sign In. Please double check your username or password!";
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
		<div class="w3l_header_right1">
			<h2><a href="">Contact Us</a></h2>
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
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:lapatisserie@bakes.com">lapatisserie@bakes.com</a></li>
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
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li><?=$title?></li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- login -->
		<div class="w3_login">
			<h3>Sign In</h3>
			<div class="w3_login_module">
                <div class="module form-module">
                    <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                    </div>
                    <div class="form">
                        <h2>Sign In to your account</h2>
                        <form action="#" method="post">
							<input type="text" name="usn" placeholder="Username" required=" ">
							<input type="password" name="pass" placeholder="Password" required=" ">
							<input type="submit" value="Login" name="login">
                        </form>
                		<p><?=$error;?></p>
                    </div>
				  <div class="cta"><a href="regist.php">Don't Have an Account? Sign Up Here!</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<?php 
    require "include/footer.php";
?>