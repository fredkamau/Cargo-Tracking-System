<?php include '../includes/headerform.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php include '../includes/db_connection.php'; ?>
<?php //include 'auth_cus.php'; ?>

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
								<li><a href="#"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<li><a href="track.php"> <i class="fa fa-truck active"></i> Track Order</a></li>

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
						<li>Order </li>
					
					</ul>
				</div>
			</div>
			<!-- //breadcrumbs -->

			<div class="inner_content_w3_agile_info two_in">

<?php 
$track=$source=$sink=$type=$distance="";
$deliveryr=$amount=$weight=$cost="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$track=rad(8);
$source=$_POST["source"];
$sink=$_POST["destination"];
$type=$_POST["type"];
$customer=$_SESSION['customer'];
$delivery=0;
$amount=test_input($_POST["amount"]);

$distance="0";
$cost=cost($source,$sink,$amount);-
$dos=date("Y-m-d");
$driver=driver();
}
 ?>
				

				<div class="wthree_general">


					<div class="grid-1 graph-form agile_info_shadow">
						<h3 class="w3_inner_tittle two">Place a Pick-up Order </h3>
						<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="form-group">
												<label for="selector1" class="col-sm-2 control-label">Source</label>
												<div class="col-sm-8">
												
													<select name="source" id="selector1" class="form-control1 ">
													<option>Point of Pickup </option>
													<option value="Turkana">Turkana</option>
											
													<option value="Gilgil">Gilgil</option>
												    <option value="Kiziwi">Kiziwi</option>
												</select></div>
							</div>
							
							<div class="form-group">
												<label for="selector1" class="col-sm-2 control-label">Destination</label>
												<div class="col-sm-8">
												
													<select name="destination" id="selector1" class="form-control1">
													<option>Point of Delivery</option>
													<option value="Gilgil">Gilgil</option>
													<option value="Turkana">Turkana</option>
													<option value="Kiziwi">Kiziwi</option>
												</select></div>
							</div>

							<div class="form-group">
								<label for="radio" class="col-sm-2 control-label">Cargo Type</label>
								<div class="col-sm-8">
									<div class="radio block"><label><input type="radio" name="type" value="container"> Containerized Cargo</label></div>
									<div class="radio block"><label><input type="radio" name="type" value="Perishable">Perishable Goods</label></div>
									<div class="radio block"><label><input type="radio" name="type" value="Petroleum"> Petroleum Products</label></div>
									<div class="radio block"><label><input type="radio" name="type" value="Hazardous"> Hazardous Products</label></div>
								</div>
							</div>

							
							<div class="form-group">
								<label class="col-md-2 control-label">Amount/Weight</label>
								<div class="col-md-8">
									<div class="input-group input-icon right">
										<span class="input-group-addon">
											<i class="fa fa-fw fa-spin fa-spinner"></i>
											<!-- <i class="fa fa-tachometer"></i> -->
										</span>
										<input id="email" class="form-control1 icon" type="text" placeholder="Amount/Weight in Litres/kg's" required="" name="amount">
									</div>
								</div>
								<div class="col-sm-2">
									<p class="help-block">Do not write the units</p>
								</div>
							</div>
							
                        				 
							
							<button type="submit" class="shrink">Place Order</button>
							 
							
						</form>

					</div>
				</div>
				<!--//set-3-->
				
			</div>
			<!--//forms-inner-->
		</div> 
		<!--//forms-->	
<?php 
if (isset($_POST["amount"])) {
$query1= "INSERT INTO cargo (" ;
$query1.="source,destination,tracking_id,cargo_type, " ;
$query1.="distance,delivery_status,dof_submission,driver,amount,cost,customer)" ;
$query1.="VALUES (" ;
$query1.=" '{$source}','{$sink}','{$track}', " ;
$query1.="'{$type}','{$distance}','{$delivery}','{$dos}','{$driver}','{$amount}','{$cost}','{$customer}' " ;
$query1.=")";
$results=mysqli_query($con,$query1);
        confirm_query($results);
if ($results) {
header("Location: invoice.php");
	exit;
} else {
        echo "<div class='copyrights'>
         
<h3 class='text-warning text-center'>Route order placement failed. Try again later</h3>
<a href='index.php'><p class='text-center text-warning'>click here to go back to the dashboard</p></a>
</div>";     	
            }
}
?>







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