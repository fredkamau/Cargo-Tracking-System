<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/headerform.php'; ?>
<?php include '../includes/functions.php'; ?>
<body>
	<!-- /pages_agile_info_w3l -->

	<div class="pages_agile_info_w3l">
		<!-- /login -->
		<div class="over_lay_agile_pages_w3ls two">
			<div class="registration">
				<?php 
				$username=$mail=$password="";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$username=$_POST["name"];
					$mail=$_POST["email"];
					$password=$_POST["password"];
					$date=date("Y-m-d");
				}
				?>

				<?php

				session_start();
// If form submitted, insert values into the database.
				if (isset($_POST['username'])){
        // removes backslashes
					$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
					$username = mysqli_real_escape_string($connection,$username);
 

					$password = stripslashes($_REQUEST['password']);
					$password = mysqli_real_escape_string($connection,$password);
  //Checking  is user existing in the database or not
					$query = "SELECT * FROM `tenants` WHERE username='$username'
					and password='".md5($password)."'";

					$result = mysqli_query($connection,$query) or die(mysql_error());
					confirm_query($result);
					$rows = mysqli_num_rows($result);
					if($rows==1){

						$_SESSION['username'] = $username;
						
            // Redirect user to dashboard.php
						header("Location: ../dash.php");
					}else{
						echo "
						<h3>Username/password is incorrect refresh the page and login again .</h3>
						";
					}
				}else{
					?>  





					<div class="signin-form profile">
						<h2>Sign In</h2>
						<div class="login-form">
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
								<input type="text" name="name" placeholder="Username" required="">
								<span class="error">* <?php echo $nameErr;?></span>
								<input type="email" name="email" placeholder="Email address" required="">
								<span class="error">* <?php echo $emailErr;?></span>
								<input type="password" name="password" placeholder="Password" required="">
																<!-- <input type="password" name="password" placeholder="Confirm Password" required="">
																-->
																<div class="tp">
																	<input type="submit" value="Sign Up">
																</div>
															</form>
														<?php } ?>
														</div>

														<p><a href="#"> By clicking Sign Up, You agree to Our terms</a></p>

														<h6><a href="#">Back To Home</a><h6>
														</div>
													</div>
													<!--copy rights start here-->




													<div class="copyrights_agile two">
														<p>© 2017-<?php echo date("Y");?> Roy Transmoters. All rights reserved 
														</p>
													</div>	
													<!--copy rights end here-->
												</div>
											</div>
											<!-- /login -->
											<!-- //pages_agile_info_w3l -->


											<!-- js -->

											<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
											<script src="js/modernizr.custom.js"></script>

											<script src="js/classie.js"></script>
											<script src="js/gnmenu.js"></script>
											<script>
												new gnMenu( document.getElementById( 'gn-menu' ) );
											</script>

											<!-- //js -->

											<script src="js/screenfull.js"></script>
											<script>
												$(function () {
													$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

													if (!screenfull.enabled) {
														return false;
													}



													$('#toggle').click(function () {
														screenfull.toggle($('#container')[0]);
													});	
												});
											</script>
											<script src="js/jquery.nicescroll.js"></script>
											<script src="js/scripts.js"></script>
											<script src="js/snow.js"></script>
											<script type="text/javascript">

												var _gaq = _gaq || [];
												_gaq.push(['_setAccount', 'UA-36251023-1']);
												_gaq.push(['_setDomainName', 'jqueryscript.net']);
												_gaq.push(['_trackPageview']);

												(function() {
													var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
													ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
													var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
												})();

											</script>
											<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


										</body>
										</html>