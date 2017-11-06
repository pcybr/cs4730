<html>
	<head>
		<title>Arctic Thirst</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Lato|Rajdhani|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bad+Script|Fredericka+the+Great|Kalam|Anton" rel="stylesheet">
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">

					<h1 id="logo"><a href="index.html">Arctic Thirst</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="newsletter.php">News</a></li>
							<li class="current"> <a href="products.php">Our Products</a></li>
							<li><a href="sign.html">Log In</a></li>
							<li><a href="contact.php" class="button fit scrolly" style="color: gold;">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
			<section class="banner">
				<div class="banner-overlay">


					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->

					<div class="inner">

						<header>
							<img src="images/ice.png" class="ice"/>
							<h2><span style="color: gold;">Find</span> Your Drink.</h2>
						</header>
						<p>Explore our products and <br />find the drink that suits<strong style="font-weight: 800;"> you</strong></p>
						<footer>
							<ul class="buttons vertical">
								<li><a id="top-button" href="#main" class="button fit scrolly">Meet the team</a></li>
							</ul>
						</footer>

					</div>
					</div>


				</section>
				<div class="arrow-up"></div>
			<!-- Main -->
				<article id="main" class="products_list" style="background-color: #F7F8F7 ;">

					<!-- Three -->
						<div class="product" style="height: 900px;">
						<section class="wrapper style3 container special" style="margin-bottom: 0;">

							<header class="major" style="color: black; padding-bottom: 0;">
								<h2>Our <strong style="color: gold; padding-bottom: 0;">Products</strong></h2>
							</header>


								<p id="product-about">
								Here are a few of our most popular products we have to offer, each from their own glacial region. Each drink were naturally infused with nutrients in their respective regions to provide differnt health benefits. Take a look and take a taste of what we have to offer:
								</p>

								<?php
								  $url = "https://bitpay.com/api/rates";

								  $json = file_get_contents($url);
								  $data = json_decode($json, TRUE);

								  $rate = $data[1]["rate"];
								  $usd_price = 10;     # Let cost of elephant be 10$
								  $bitcoin_price = round( $usd_price / $rate , 8 );
								?>
								<?php echo "<ul> <li> Price: $usd_price $ / $bitcoin_price BTC </li> </ul>";
								?>


								<div class="row" id="facts">
								<div class="4u 12u(narrower)">

									<section>
										<img src="images/pen.png" class="facts-icon"/>
										<header>
											<h3 style="color: gold;"><b>Snow Hill</b></h3>
										</header>
										<p style="color: black; height: 200px;">Our Snow Hill water is one of our most popular drinks, containing minerals that are soothing for the mind. The water comes from Snow Hill Island, a popular penguin spot in Antarctica</p>
										<form action="https://bitpay.com/checkout" method="post" >
  											<input type="hidden" name="action" value="cartAdd" />
  											<input type="hidden" name="data" value="Bu8gKMj3b6jcdyNfHU3vp5" />
  											<input type="image" src="bitcoin1.png" border="0" name="submit" alt="BitPay, pay with bitcoins." style="width: 100px;
    										border: 1px solid #676161;
    										padding: 10px;"	class="pay_button">
										</form>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<img src="images/iceberg.png" class="facts-icon" id="run"/>
										<header>
											<h3 style="color: gold;"><b>Revive</b></h3>
										</header>
										<p style="color: black; height: 200px;">Revive is captured from Thwaites Glacier, the underbelly in the west Antarctic Sea. This beverage is known for helping athletes naturally replenish electrolytes late in the game.</p>
										<form action="https://bitpay.com/checkout" method="post">
  											<input type="hidden" name="action" value="cartAdd" />
 											<input type="hidden" name="data" value="EpHPzs95x3EtMM8TEEh7tH" />
 											<input type="image" src="bitcoin1.png" border="0" name="submit" alt="BitPay, pay with bitcoins." style="width: 100px;
											border: 1px solid #676161;
											padding: 10px;"	class="pay_button">
										</form>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<img src="images/torres.png" class="facts-icon" id="heart"/>
										<header>
											<h3 style="color: gold;"><b>Torres</b></h3>
										</header>
										<p style="color: black; height: 200px;">Striaght from Torres del Paine in Patagonia, Torres is our northernmost drink. It's taste is unparalleled. Simply water at its finest.</p>
										<form action="https://bitpay.com/checkout" method="post" >
  											<input type="hidden" name="action" value="cartAdd" />
 											<input type="hidden" name="data" value="82kWbeyScYBJfPMuEm6yew" />
 											<input type="image" src="bitcoin1.png" border="0" name="submit" alt="BitPay, pay with bitcoins." style="width: 100px;
											border: 1px solid #676161;
											padding: 10px;" class="pay_button">
										</form>
									</section>

								</div>
							</div>
							</section>
								<!-- <img src="images/pour.png"/> -->
							<!-- </div> -->

							<!--footer class="major" style="text-align: center;">
								<ul class="buttons" style="margin: 0 auto; margin-bottom: 50px; margin-top: -50px;">
									<li><a href="#" class="button" style="color: black; left: 50%">Get Hydrated</a></li>
								</ul>
							</footer>
							-->
						</section>
						</div>

				</article>

			<!-- Footer -->
			<footer class="footer">

				<ul class="icons">
					<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
					<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
				</ul>

				<p class="copyright">Copyright © Arctic Thirst Glacier Water. 2017 All Rights Reserved.</p>

				<!-- <ul class="copyright">
					<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul> -->

			</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
