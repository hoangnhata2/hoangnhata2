<?php  
include "DbModel.php";
$products = "SELECT * FROM products WHERE id = ".$_GET['id'];
?>
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
				<span class="total">0.00</span> (<span class="qty">0</span>)
					<a href="cart.php" class="fa fa-shopping-cart" aria-hidden="true"></a>
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
				<a class="feature line-bottom" href="#">Feature</a>

				<?php 
					if (isset($rs['product_feature'])) {
						$numRow=count( $rs['product_feature'])/4;
						for ($i=0; $i <$numRow ; $i++) { 
							?>
							<div class="row">
								<?php 
								$start=$i*4;
								$end=$start+4;
								for ($j=$start; $j <$end ; $j++) { 
									if (isset($rs['product_feature'][$j])) {
										?>
										<div class="col-md-3">
					<div class="items">
						<img src="public/images/<?php  echo $rs['product_feature'][$j]['img1']   ?>">
						<a href="?action=detail$<?php echo $rs['product_feature'][$j]['id']   ?>" class="pname"><?php  echo $rs['product_feature'][$j]['name']  ?></a>
						<p class="price"><?php  echo $rs['product_feature'][$j]['price']  ?>$</p>
						<a href="cart.php"><button>Add to Cart</button></a>
					</div>	
					
				</div>

									<?php 
									}
									
								}
								 ?>
							</div>

							<?php
						}
					}
				 ?>
				
				<!-- 
				<div class="col-md-3">
					<div class="items">
						<img src="public/images/s-1.jpg">
						<a href="#" class="pname">Casio Digital World Time Stopwatch 100m Water Resistant Watch</a>
						<p class="pprice">$95.00</p>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="items">
						<img src="public/images/citizen-calendrier-eco-drive-white-dial-men_s-watch-bu2020-02a.jpg">
						<a href="#" class="pname">Calendrier Eco-Drive White Dial Men's Watch</a>
						<p class="pprice">$202.49</p>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="items">
						<img src="public/images/tissot-t-navigator-automatic-black-dial-men_s-watch-t0624301705700.jpg">
						<a href="#" class="pname">T-Navigator Automatic Black Dial Men's Watch T0624301705700</a>
						<p class="pprice">$202.49</p>
					</div>	
				</div>
				<div class="col-md-3">
					<div class="items">
						<img src="public/images/81IfWZMJiPL._UY445_.jpg">
						<a href="#" class="pname">Casio Women's LW200-7AV</a>
						<p class="pprice">$14.23</p>
					</div>	
				</div> -->
			</div>
			<div class="row">
				<a class="feature line-bottom" href="#">News</a>				
				<?php 
					if (isset($rs['product_new'])) {
						$numRow=count( $rs['product_new'])/4;
						for ($i=0; $i <$numRow ; $i++) { 
				?>
				<div class="row">
					<?php 
						$start=$i*4;
						$end=$start+4;
						for ($j=$start; $j <$end ; $j++) { 
							if (isset($rs['product_new'][$j])) {
					?>
					<div class="col-md-3">
						<div class="items">
							<img src="public/images/<?php  echo $rs['product_new'][$j]['img1']   ?>">
							<a href="#" class="pname"><?php  echo $rs['product_new'][$j]['name']  ?></a>
							<p class="pprice"><?php  echo $rs['product_new'][$j]['price']  ?>$</p>
							<a href="cart.php"><button>Add to Cart</button></a>
	
						</div>	
					</div>
						<?php 
								}										
							}
						?>
				</div>
							<?php
						}
					}
				 ?>
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