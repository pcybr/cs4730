<!DOCTYPE HTML>
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
            <li class="current"><a href="newsletter.php">News</a></li>
            <li><a href="products.php">Our Products</a></li>
            <li><a href="sign.html">Log In</a></li>
            <li><a href="contact.php" class="button special">Sign Up</a></li>
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
            <h2>Explore your<span style="color: gold;"> Terrain</span>.</h2>
          </header>
          <p>Join our <strong style="font-weight: 800;">Mailing List</strong> to get our weekly <br> newsletter in the world of water.
          <br /></p>
          <footer>
            <ul class="buttons vertical">
              <li><a id="top-button" href="#main" class="button fit scrolly">Subscribe</a></li>
            </ul>
          </footer>

        </div>
        </div>


      </section>

			<!-- Main -->
				<article id="main">

					<header class="special container" id="subscribe">
						<!-- <span class="icon fa-envelope"></span> -->
						<img src="images/mountain.png" class="ice"/>
						<h2>Subscribe to our newsletter</h2>
						<p>Hear about the latest trends in the thirst community!</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container 75%" style="margin-bottom: 100px !important; margin-top: -50px !important">
						<?php include 'database.php';

				// create a variable
						if($_POST){
							$name=$_POST['name'];
							$email=$_POST['email'];


							//Execute the query

							$query = mysqli_query($connect, "SELECT email1 FROM subs WHERE email1='$email'");

							 if (mysqli_num_rows($query) > 0)
							  {
								echo "<h2 style='color: red;'>Already Subscribed.</h2>" ;
								//echo '<script language = "javascript" type="text/javascript" src="main.js">',
							 //    	 'showEmailExists();',
							 //     	'</script>'
							;  }

							 else
							  {
							    mysqli_query($connect, "INSERT INTO subs(name1, email1)
											VALUES('$name','$email')");
							    echo "<h2 style='color: green;'>Subsribed!</h2>";


								 // Import PHPMailer classes into the global namespace
								// These must be at the top of your script, not inside a function


								//Load composer's autoloader
								require 'class.pop3/PHPMailerAutoload.php';

								$mail = new PHPMailer;                              // Passing `true` enables exceptions
								try {
								    //Server settings
								    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
								    $mail->isSMTP();                                      // Set mailer to use SMTP
								    $mail->Host = 'smtp.gmail.com;smtp1.gmail.com';  // Specify main and backup SMTP servers
								    $mail->SMTPAuth = true;                               // Enable SMTP authentication
								    $mail->Username = 'ntuz96@gmail.com';                 // SMTP username
								    $mail->Password = 'Hockey11';                           // SMTP password
								    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
								    $mail->Port = 587;                                    // TCP port to connect to

								    //Recipients
								    $mail->setFrom('ntuz96@gmail.com', 'Arcitc Thirst');
								    $mail->addAddress($email, $name);     // Add a recipient

								    //Attachments
								   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
								    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

								    //Content
								    $mail->isHTML(true);                                  // Set email format to HTML
								    $mail->Subject = 'Thanks for subscribing!';
								    $mail->Body    = 'You will be updated with everything Arctic Thirst!';
								    $mail->AltBody = 'You will be updated with everything Arctic Thirst!';

								    $mail->send();
								    echo 'Message has been sent';
								} catch (Exception $e) {
								    echo 'Message could not be sent.';
								    echo 'Mailer Error: ' . $mail->ErrorInfo;
								}

							  }

						}
							?>

							<!-- Content -->
								<div class="content">
									<form action="" method="post">
										<div class="row">
											<div class="12u">
												<input type="text" name="name" placeholder="Name" pattern="[A-Za-z\s]{1,}" title="Alphabetical characters please." required/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="email" name="email" placeholder="Email" required/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="buttons">
													<li><input type="submit" class="button fit scrolly" value="Subscribe!" style="width: 80%; color: gold;" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

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


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="main.js"></script>
	</body>
</html>
