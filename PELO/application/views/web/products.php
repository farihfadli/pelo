<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Our Products</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>/assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/assets/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url(); ?>/assets/web/js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="<?php echo base_url(); ?>/assets/web/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/web/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="<?php echo base_url(); ?>/assets/web/css/animate.min.css" rel="stylesheet"> 
<script src="<?php echo base_url(); ?>/assets/web/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:farihfadli44@gmail.com">pelo.apparel@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+62 822 348 932 84</li>
						
					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				
				<div class="header-right2">
					<div class="cart box_1">

						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="container">
			<div class="logo-nav">
				
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <div class="navbar-brand logo-nav-left wow fadeInLeft animated" data-wow-delay=".5s">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Pelo<span>Apparel</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li ><a href="<?php echo base_url().'MyController/index1'?>" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown active">
								<a href="<?php echo base_url().'MyController/prod'?>" class="dropdown-toggle" data-toggle="dropdown">Catalog <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											
												
											<?php foreach ($data as $x) { ?>
											<li><a href="<?php echo base_url().'MyController/getDetail/'.$x['idbrg']?>"> <?= $x['namabrg'] ?> </a> </li>
											<?php } ?>
											<br></br>
											<li><a href="<?php echo base_url().'MyController/prod'?>">SEE ALL</a></li>
												
										<div class="clearfix"></div>
									</div>
									<div class="row-top">

										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							
							<li><a href="<?php echo base_url().'MyController/order'?>"> Order Form</a></li>
							<li><a href="<?php echo base_url().'MyController/contact'?>">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				
		</div>
	</div>
<!-- //header -->
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Products</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="<?php echo base_url().'MyController/index1'?>">Home</a><label>/</label>Products</h3>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
						<div class="col-md-3 product-bottom">
			<!--categories-->
			
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					<h3>List Products</h3>
					<ul class="cate">
						
						
							<ul>
								<?php foreach ($data as $x) { ?>
								<li><i class="glyphicon glyphicon-menu-right" ></i><a href="<?php echo base_url().'MyController/getDetail/'.$x['idbrg']?>"> <?= $x['namabrg'] ?> </a> </li>
								<?php } ?>
					
					</ul>
				</div>
				
		<!--//menu-->
		<!--price-->
				
				<!---->
 	</div>
			<div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
				<div class="mens-toolbar">
						
	    		    
    	      
                	<div class="clearfix"></div>		
		        </div>

			<div class="mid-popular">
				<form method="post" action="<?php echo base_url().'MyController/readKatalog'?>"> 	
			<?php foreach ($data as $x) { ?>

				<div class="col-sm-4 item-grid item-gr  simpleCart_shelfItem">
							<div class="grid-pro">
								<div  class=" grid-product " >

									<figure>		
									
										
											<div class="grid-img">
												<img  src="<?php echo base_url().'upload/'.$x['gambarbrg']; ?>" class="img-responsive" alt="">
											</div>
													
												
									</figure>	
								</div>
								<div class="women">
									
									<h6><a href="<?php echo base_url().'MyController/getDetail/'.$x['idbrg']?>"> <?= $x['namabrg'] ?> </a></h6>
									<p ><em class="item_price">Rp. <?= $x['hargabrg'] ?></em></p>
									<a href="<?php echo base_url().'MyController/order'?>" data-text="Order Now" class="but-hover1 item_add">Order Now</a>
								</div>
							</div>
						</div>

			<?php } ?>


						
					<div class="clearfix"></div>
				</div>
			</div>

		
			</div class="clearfix"></div>
			</div>			
		</div>
				<!--//products-->

<div class="social animated wow fadeInDown" data-wow-delay=".1s">
	<div class="container">
		<div class="col-sm-3 social-ic">
			<a href="https://facebook.com">FACEBOOK</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="https://twitter.com">TWITTER</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="https://www.instagram.com/merchandise_its/">INSTAGRAM</a>
		</div>
		<div class="col-sm-3 social-ic">
			<a href="http://line.me/ti/p/~">LINE@</a>
		</div>
	<div class="clearfix"></div>
	</div>
</div>

<!-- footer -->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
		<div class="col-md-9 footer-top1">
		<h4>Any QUESTION ?</h4>
		<p>If you still confused about our products, feel free to ask it to us !</p>
		</div>
		<div class="col-md-3 footer-top2">
		<a href="<?php echo base_url().'MyController/contact'?>">Contact Us</a>
		</div>
		<div class="clearfix"> </div>
		</div>
			<div class="footer-grids">
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Hi ! we're ITS-SUB based new fashion apparel .<span>which serve you high quality apparel with premium materials .</span></p>
				</div>
				<div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" ></i>Bumi Marina Emas 107<span>Keputih, Surabaya, Indonesia.</span></li>
						<li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:farihfadli44@gmail.com">pelo.apparel@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+62 822 348 932 84</li>
					</ul>
				</div>
				
			
			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>&copy 2017 Pelo Apparel. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>