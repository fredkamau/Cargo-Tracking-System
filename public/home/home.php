<?php include '../../includes/functions.php'; ?>
<?php require_once '../../includes/db_connection.php'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>


	<title>Roy Transmotors</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet" media="screen">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">

	<!-- Colors -->
	<link href="css/css-index.css" rel="stylesheet" media="screen">
	<!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
	<!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
	<link href="css/css-index-red.css" rel="stylesheet" media="screen">
	<!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
	<!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

	<!-- Google Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

</head>

<body data-spy="scroll" data-target="#navbar-scroll">

	<!-- /.preloader -->
	<div id="preloader"></div>
	<div id="top"></div>

	<!-- /.parallax full screen background image -->
	<div class="fullscreen landing parallax" style="background-image:url('images/3.jpeg');" data-img-width="2000" data-img-height="1333" data-diff="100">

		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-7">

						<!-- /.logo -->
						<div class="logo wow fadeInDown"> <!-- <a href=""><img src="images/logo3.png" alt="logo"></a> --></div>
<?php 
	$username=$mail=$password="";
  $nameErr=$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {				

	$username=$_POST["name"];
	if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
		$nameErr = "Only letters and white space allowed";
	}


	$mail=$_POST["email"];

	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
	}

	$password=$_POST["password"];
	$date=date("Y-m-d");
}
?>


						<!-- /.main title -->
						<h1 class="wow fadeInLeft">
							Roy Transmotors <br>
							Limited
						</h1>

						<!-- /.header paragraph -->
						<div class="landing-text wow fadeInUp">
							<p>The project online cargo tracking and transport management system is a system that would be used to manage a transport and logistics company. In this system the customers will be able to place a pickup order by entering the necessary information online. The system will calculate the cost according to the type of cargo, distance to be transported and weight or amount of the consignment. Then truck drivers will be dispatched automatically by the system to pick up the cargo and then update the cargo status. Customers will easily track their cargo and get notified in case anything happens to it on transit and also get a notification when it arrives on the point of delivery. 

							</p>
						</div>				  

						<!-- /.header button -->
						<div class="head-btn wow fadeInLeft">
							<a href="#" class="btn-primary">Karibu Roy</a>
							<a href="../signin.php" class="btn-default">Sign In</a>
						</div>



					</div> 

					<!-- /.signup form -->
					<div class="col-md-5">

						<div class="signup-header wow fadeInUp">
							<h3 class="form-title text-center">Get Started</h3>
 

							


							<form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" method="POST" id="#">

								<div class="form-group">
									<input class="form-control input-lg" name="name" id="name" type="text" placeholder=" Username" required>
										<span class="error"><?php echo $nameErr;?></span>
								</div>
								<div class="form-group">
									<input class="form-control input-lg" name="email" id="name" type="email" placeholder="Email adress" required>
									<span class="error"><?php echo $emailErr;?></span>
								</div>

								<div class="form-group">
									<input class="form-control input-lg" name="password" id="email" type="password" placeholder="Password" required>
								</div>



								<div class="form-group last">
									<input type="submit" class="btn btn-warning btn-block btn-lg" value="Sign Up">
								</div>
								<p class="privacy text-center">We Will Never Share your Email with Anyone</p>
							</form>

							<?php 
							if (isset($_POST["name"])) {
								$query = "INSERT into customer (username, password, email,creation_date)
								VALUES ('$username', '".md5($password)."', '$mail', '$date')";

								$results = mysqli_query($con,$query);
								//confirm_query($results);

								if ($results) {
									redirect_to("../signin.php");
								} else {
									echo "<div class='copyrights_agile two'>
									<h3 class='text-warning text-center'>account creation failed.</h3>


									</div>";      
								}
							}


							?>		
						</div>				
					</div>
				</div>
			</div>
		</div> 
	</div> 
</div>

<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="#top"><img src="images/kayole.png" alt="logo"></a>
			</div>


		</div>
	</nav>
</div>

<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4">
			<!-- /.social links -->
			<div class="social text-center">
				<ul>
					<li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
					<li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
					<li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
					<li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>	
			<div class="text-center wow fadeInUp" style="font-size: 14px;">&copy Copyright  <a href="#"> Roy Transmotors</a> 2017 - 2018</div>
			
			<a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
		</div>	
	</div>	

</footer>

<!-- /.javascript files -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
	new WOW().init();
</script>
</body>
</html>