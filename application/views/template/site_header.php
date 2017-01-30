<html>
	<head>
		<title><?php echo $header_title . AUTHOR ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo SITE_CSS_PATH . 'bootstrap.css'; ?>">
		<link rel="stylesheet" href="<?php echo SITE_CSS_PATH . 'style.css'; ?>">
		<link rel="stylesheet" href="<?php echo SITE_CSS_PATH . 'hover.css'; ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script type="text/javascript" src="<?php echo SITE_JS_PATH . 'jquery-3.1.1.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo SITE_JS_PATH . 'bootstrap.min.js'?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
	</head>
	<body>
		<!-- <div class="alert hide_alert">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong></strong> <span></span>
			</div> -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
					<img src="<?php echo SITE_IMG_PATH . 'logo.png'; ?>" alt="Forfatterskolen">   
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="#">
							<img src="<?php echo SITE_IMG_PATH . 'home.png'; ?>" alt=""> <br>
							Home</a>
							</li>
						<li>
							<a href="#">
								<img src="<?php echo SITE_IMG_PATH . 'service.png'; ?>" alt=""> <br>
								Services</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo SITE_IMG_PATH . 'why.png'; ?>" alt=""> <br>
								Why Choose APS</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo SITE_IMG_PATH . 'contact.png'; ?>" alt=""> <br>
								Contact</a>
						</li>
						<!-- <li>
							<a href="#/courses/cart" class="cart_link">
							<span class="cart_count">100</span>
							<i class="fa fa-shopping-cart"></i>
							</a>
						</li>
						<li>
							<a href="#" class="btn btn-default btn-md login-btn flat hvr-sweep-to-right">Login</a>
						</li> -->
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
							</li> -->
					</ul>
				</div>
			</div>
		</nav>

		<div class="parallax-container">
			<div class="parallax center-things" style="background-image: url(<?php echo SITE_IMG_PATH . 'banner1.png'; ?>); ">
				<div class="banner-info center-things">
					<div class="banner-title" style="   ">
						Atlantic Performance Solutions
					</div>
					<div class="banner-desc">
						provides Software Development and Consulting Services to Bermuda businesses.
						<br>We are highly skilled programmers and project managers building high quality innovative applications.
						<br>With our focus on performance - we add value to your business.	
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-xs-12">
							<button class="btn btn-primary btn-lg">SERVICE BROCHURES</button>
						</div>
					</div>

					<div class="container we">
						<hr>
						<div class="row">
							<div class="col-sm-12 col-md-4">
								<img src="<?php echo SITE_IMG_PATH . 'check.png'; ?>" class="img-responsive" alt="Image">
								<p>We recruit highly qualified and experienced professionals with deep technical and project management skill and a proven track record of success.</p>
							</div>
							<div class="col-sm-12 col-md-4">
								<img src="<?php echo SITE_IMG_PATH . 'check.png'; ?>" class="img-responsive" alt="Image">
								<p>
									We embrace flexibility and adaptability
									to quickly respond to changing conditions
									while maintaining the highest standards 
									of qulaity.
								</p>
							</div>
							<div class="col-sm-12 col-md-4">
								<img src="<?php echo SITE_IMG_PATH . 'check.png'; ?>" class="img-responsive" alt="Image">
								<p>
									We provide expert business 
									intelligence and data warehousing services.
								</p>
							</div>
						</div>
					</div>
				</div>	
				

			</div>
		</div>