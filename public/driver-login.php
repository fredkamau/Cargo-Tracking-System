<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/headerform.php'; ?>
<?php include '../includes/functions.php'; ?>
<body>
	<!-- /pages_agile_info_w3l -->

	<div class="pages_agile_info_w3l">
		<!-- /login -->
		<div class="over_lay_agile_pages_w3ls">
			<div class="registration">

				<div class="signin-form profile">
					<h2> Driver Log In </h2>
					<div class="login-form">
<?php
$username=$password="";
//session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  //Checking  is user existing in the database or not
        $query = "SELECT * FROM `driver` WHERE username='$username'
and password='{".md5($password)."}'";
  
  $result = mysqli_query($con,$query) ;
  confirm_query($result);
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['driver'] = $username;
            // Redirect user to dashboard.php
      header("Location: driver_home.php");
      exit;
         }else{
  echo "
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='driver-login.php'>Login</a>";
  }
    }else{

?>  

						<form action="" method="post">
							<input type="text" name="username" placeholder="username" required="" >
							<input type="password" name="password" placeholder="Password" required="" >
							<div class="tp">
								<input type="submit" value="SIGN IN">
							</div>
						</form>
						 <?php 
						} 
						?>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					

					<h6><a href="home/home.php">Back To Home</a><h6>
					</div>
				</div>
				<!--copy rights start here-->
				<div class="copyrights_agile">
						<p>© 2017-<?php echo date("Y");?> Kayole Rent Collectors. All rights reserved 
                            </p
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