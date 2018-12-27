
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>
<body>
	<header>
		<div class="logo">
			<div class="container">
				$<span class="total">0.00</span> (<span class="qty">0</span>)
					<a href="#" class="fa fa-shopping-cart" aria-hidden="true"></a>
			</div>
		</div>
		<div class="title">
			<div class="container">
				<h2>LUXURY WATCHES</h2>
			</div>
		</div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">

						<li class="active"><a href="http://localhost/mlgia/" class="menu">Home</a></li>
					<?php foreach ($rs['product_type'] as $type): ?>
						<li><a href="?action=type$<?php echo $type['type_id']   ?>" class="menu"><?php echo $type['type_name']  ?></a></li>
					<?php endforeach ?>
				
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<div class="content">
		<div class="container">
			<div class="row">
				<a class="feature line-bottom" href="#">DETAIL</a>
				<div class="col-md-3 ">
					<div class="items">
						<img src="public/images/<?php echo $rs['detail_view'][0]['img1']   ?>">
						<img src="public/images/<?php echo $rs['detail_view'][0]['img2']   ?>">
						<img src="public/images/<?php echo $rs['detail_view'][0]['img3']   ?>">
					</div>	
				</div>
				<div class="col-md-3">
					
					<div class="items">
						<img src="public/images/tissot-t-navigator-automatic-black-dial-men_s-watch-t0624301705700.jpg">
						<a href="#" class="pname">T-Navigator Automatic Black Dial Men's Watch T0624301705700</a>
						<p class="pprice">$202.49</p>
					</div>	
				</div>
			<div><?php echo $rs['detail_view'][0]['xem'] ?></div>
			</div>	
	
	<footer>
		<div class="container">
			<div class="row line">
				<div class="col-md-6">
					<h3>About Us</h3><br>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div>
				<div class="col-md-3">
					<h3>My Account</h3><br>
					<p>My Account<br><br>My Credit slips<br><br>My Merchandise returns</p>
				</div>
				<div class="col-md-3">
					<h3>Store Information</h3><br>
					<p>The company name,<br>Lorem ipsum dolor,<br>Glasglow Dr 40 Fe 72.<br>contact@example.com</p>
				</div>
			</div>
			<div class="row line">
				<div class="col-md-12 f2">
					&copy 2015 Thiết kế web
				</div>
			</div>
			
		</div>
	</footer>
	<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/script.js"></script>
</body>
</html>

