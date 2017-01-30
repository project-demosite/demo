<html>
<head>
	<title><?php echo $header_title . AUTHOR ?></title>
	<link rel="stylesheet" href="<?php echo SITE_CSS_PATH . 'bootstrap.css'; ?>">	
	<link rel="stylesheet" href="<?php echo SITE_CSS_PATH . 'non-responsive.css'; ?>">	
	<link rel="stylesheet" href="<?php echo SITE_CSS_PATH . 'style.css'; ?>">	
	<script type="text/javascript" src="<?php echo SITE_JS_PATH . 'jquery-3.1.1.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo SITE_JS_PATH . 'bootstrap.min.js'?>"></script>
</head> 
<body>
<div class="alert hide_alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong></strong> <span></span>
</div>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Title</a>
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
