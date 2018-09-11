<?php include '../includes/headerform.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php include '../includes/db_connection.php'; ?>
<?php session_start(); ?>
<body>
	<!-- banner -->
	<div class="wthree_agile_admin_info">
		<!-- /w3_agileits_top_nav-->
		<!-- /nav-->
		<div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				<!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
<ul class="gn-menu agile_menu_drop">
<li><a href="#"> <i class="fa fa-truck active"></i> Track Order</a></li>
<li><a href="order.php"> <i class="fa fa-clone"></i> Place Order</a></li>
<li><a href="invoice.php"> <i class="fa fa-money"></i> My Orders</a></li>
<li><a href="logout.php"> <i class="fa fa-sign-out"></i> Logout</a></li>
								
								
								
								
								

								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Roy Transmoters </a></h1></li>
				<li class="second admin-pic">
					<ul class="top_dp_agile">
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/admin.png" alt=""> </span> 
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								
								<li> <a href="#"><i class="fa fa-user"></i> <?php echo  $_SESSION['customer']; ?></a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">0</span></a>
							<ul class="dropdown-menu">
								<li>
									<!-- <div class="notification_header">
										<h3>Your Notifications</h3>
									</div> -->
								</li>
								
								<div class="clearfix"></div>	
							</a></li>

							<li>

							</li>
						</ul>
					</li>

				</ul>
			</li>
			<li class="second top_bell_nav">
				<ul class="top_dp_agile ">


				</ul>
			</li>
			<li class="second top_bell_nav">
				<ul class="top_dp_agile ">
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">0</span></a>
						<ul class="dropdown-menu">
							<li>


							</li>
						</ul>
					</li>	
				</ul>
			</li>

			<li class="second w3l_search">

				<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." >
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>

			</li>
			<li class="second full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</li>

		</ul>
		<!-- //nav -->

	</div>
	<div class="clearfix"></div>
	<!-- //w3_agileits_top_nav-->

	<!-- /inner_content-->
	<div class="inner_content">
		<!-- /inner_content_w3_agile_info-->

	<!-- breadcrumbs -->
		<div class="w3l_agileits_breadcrumbs">
			<div class="w3l_agileits_breadcrumbs_inner">
				<ul>
					<li><a href="#">Home</a><span>«</span></li>
					<li>Track</li>
					
				</ul>
			</div>
		</div>
		<!-- //breadcrumbs -->
	
		<div class="inner_content_w3_agile_info two_in">
	
<?php 
$track="";
$location="";
$time="";
if (isset($_POST['track'])){
	$track = stripslashes($_REQUEST['track']);
	$track = mysqli_real_escape_string($con,$track);
	$query = "SELECT * FROM `cargo` WHERE tracking_id='$track' limit 1";

	$result = mysqli_query($con,$query);
	confirm_query($result);
	$row= mysqli_fetch_assoc($result);
	global $location;
	$location =$row["location"];
	global $time;
	$time =$row["expected_time"];
}
			?>  






			<div class="forms-inner">

				<div class="set-1_w3ls">





					<div class="col-md-6 button_set_one agile_info_shadow graph-form">
						<h3 class="w3_inner_tittle two">Track Your Cargo </h3>
						<div class="grid-1">
							<div class="form-body">
								<form class="form-horizontal" method="post" action=""> <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">tracking ID</label> <div class="col-sm-9"> <input type="search" class="form-control" id="inputEmail3" placeholder="eg mWBs3VWaDA" name="track">
								</div> 
							</div>
							<div class="col-sm-offset-2">
								<button type="submit" class="btn btn-default">Track</button> </div> </form> 
							</div>

						</div>
					</div>

					<div class="col-md-6 button_set_one two agile_info_shadow graph-form">
						<h3 class="w3_inner_tittle two" style="color: orange">Current location </h3>
						<div class="grid-1">
							<div class="form-body">
								<div data-example-id="simple-form-inline">

		<?php 
		$location="kizingo";
		$time="1900hrs";
		echo "<br>";
		echo  "<h4>Your Consignment is Currently at </4> ".$location ."<br>"; 
		echo "<h4>And it will arrive at around</4>". $time;
		echo "<br>";
		echo "<br>";
		?>


								</div>
							</div>
						</div>
					</div>	




					<div class="clearfix"> </div>
				</div>
				<!--//set-3-->
				
			</div>
			<!--//forms-inner-->
		</div> 
		<!--//forms-->	








	</div>
	<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->
</div>

<div class="copyrights">
	<p>© 2017-<?php echo date("Y");?> Roy Transmoters. All rights reserved 
	</p>
</div>	

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

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>														