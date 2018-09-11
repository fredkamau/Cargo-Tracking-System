<?php include '../includes/headerform.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php include '../includes/db_connection.php'; ?>
<?php include 'auth_admin.php'; ?>

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
								<li><a href="index.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<!-- <li>
									<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Manage Orders <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Place Order</a></li>
										<li class="mini_list_w3"><a href="#"> <i class="fa fa-caret-right" aria-hidden="true"></i> My Orders</a></li>
									</ul>
								</li>
								 -->
								
								
								
							
								
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
								
								<li> <a href="#"><i class="fa fa-user"></i> <?php echo  $_SESSION['admin']; ?></a> </li> 
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
						<li>Record <span>«</span></li>
						<li><?php echo rad(10) ?></li>
					
					</ul>
				</div>
			</div>
			<!-- //breadcrumbs -->

			<div class="inner_content_w3_agile_info two_in">

<?php 
$amount=$code=$name="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {



$code=test_input($_POST["code"]);
$name=test_input($_POST["name"]);
$amount=test_input($_POST["amount"]);
$date=date("Y-m-d");

}
 ?>
				

				<div class="wthree_general">


					<div class="grid-1 graph-form agile_info_shadow">
						<h3 class="w3_inner_tittle two">Mpesa Payments </h3>
						<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

							<div class="form-group">
										<label class="col-md-2 control-label">Account Name</label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
												<input type="text" class="form-control1 icon" placeholder="Account Name" name="name">
											</div>
										</div>
									</div>
							
							
							

							

							
							<div class="form-group">
								<label class="col-md-2 control-label">Transaction Code</label>
								<div class="col-md-8">
									<div class="input-group input-icon right">
										<span class="input-group-addon">
											<i class="fa fa-fw fa-spin fa-spinner"></i>
											
										</span>
										<input id="email" class="form-control1 icon" type="text" placeholder="mpesa Transaction Code" required="" name="code">
									</div>
								</div>
								<div class="col-sm-2">
									<p class="help-block">Write as it is</p>
								</div>
							</div>
							
							<div class="form-group">
										<label class="col-md-2 control-label">Amount</label>
										<div class="col-md-8">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-money"></i>
												</span>
												<input type="text" class="form-control1 icon" placeholder="amount" name="amount">
											</div>
										</div>
									</div>
                        				 
							
							<button type="submit" class="shrink">Add Payment</button>
							 
							
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
$query1= "INSERT INTO mpesa (" ;
$query1.="account_name,transaction_code,date, " ;
$query1.="amount)" ;
$query1.="VALUES (" ;
$query1.=" '{$name}','{$code}', " ;
$query1.="'{$date}','{$amount}'" ;
$query1.=")";
$results=mysqli_query($con,$query1);
        confirm_query($results);
if ($results) {
echo "
         
<h3 class=' text-center w3_inner_tittle two'>You have successfully recorded the mpesa payment</h3>
<a href='add_payment.php'><p class='text-center text-success'>Click Here to Add Another</p></a>
";
	
} else {
        echo "
         
<h3 class='text-center w3_inner_tittle two'>code addition failed.</h3>
<a href='index.php'><p class='text-center text-warning'>click here to go back to the dashboard</p></a>
";     	
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