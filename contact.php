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
				<header id="header" class="alt" style="background: black;">

					<h1 id="logo"><a href="index.html">Arctic Thirst</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li class=""><a href="about.php">About Us</a></li>
							<!--<li> <a href="products.html">Our Products</a></li> -->
							<li><a href="sign.html">Log In</a></li>
							<li><a href="contact.php" class="button fit scrolly" style="color: gold">Sign Up</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-envelope"></span>
						<img src="images/mountain.png" class="ice"/>
						<h2>Become a member of Arctic Thirst</h2>
						<p>Sign-up to earn exclusive deals on all of our products</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container 75%" style="margin-bottom: 100px !important; margin-top: -50px !important">
						<?php include 'database.php';

				// create a variable
						if($_POST){
							$name=$_POST['name'];
							$email=$_POST['email'];
							$password_Hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
							// $password_Hash=$_POST['password'];
							$address=$_POST['address'];
							$city=$_POST['city'];
							$states=$_POST['states'];
							$zip=$_POST['zip'];


							//Execute the query

							$query = mysqli_query($connect, "SELECT email FROM siteUsers WHERE email='$email'");

							 if (mysqli_num_rows($query) > 0)
							  {
								echo "<h2 style='color: red;'>Email already exists.</h2>" ;
								//echo '<script language = "javascript" type="text/javascript" src="main.js">',
							 //    	 'showEmailExists();',
							 //     	'</script>'
							;  }

							 else
							  {
							    mysqli_query($connect, "INSERT INTO siteUsers(name, email, password, address, city, state, zip)
											VALUES('$name','$email','$password_Hash','$address', '$city', '$states', '$zip')");
							    echo "<h2 style='color: green;'>New user created!</h2>";


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
								    $mail->setFrom('ntuz96@gmail.com', 'Mailer');
								    $mail->addAddress($email, $name);     // Add a recipient

								    //Attachments
								   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
								    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

								    //Content
								    $mail->isHTML(true);                                  // Set email format to HTML
								    $mail->Subject = 'Here is the subject';
								    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
								    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

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
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input type="email" name="email" placeholder="Email" required/>
											</div>
											<div class="6u 12u(mobile)">
												<input type="password" name="password" placeholder="Password" required/>
											</div>
										</div>
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input type="text" name="address" placeholder="Address" pattern="[A-Za-z0-9.\s]{1,}" title = "Do not use special characters." required />
											</div>
											<div class = "6u 12u(mobile)">
												<input type="text" name="city" placeholder="City" pattern="[A-Za-z.\s]{1,}" title = "Only use alphabetical characters."required />
											</div>

										</div>
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input type="text" name="states" list="states" placeholder="State" pattern="[A-Za-z]{1,}" required />
												<datalist id="states" name="states" placeholder="States" required/>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
												</datalist>
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="zip" minlength="5" maxlength="5" placeholder="Zip-Code" pattern="[0-9]{5}" required>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="buttons">
													<li><input type="submit" class="button fit scrolly" value="Join Now!" style="width: 80%; color: gold;" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>

			<!-- Footer -->
				<footer id="footer">

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
