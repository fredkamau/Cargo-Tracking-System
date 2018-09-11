<?php include '../includes/header.php'; ?>
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
								<li><a href="#"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								
								
								
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
									<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span> 
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

							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">0</span></a>
							<ul class="dropdown-menu">

							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">0</span></a>
							<ul class="dropdown-menu">

							</ul>
						</li>	
					</ul>
				</li>

				<li class="second w3l_search">

					<form action="#" method="post">
						<input type="search" name="search" placeholder="Search here..." required="">
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
			<div class="inner_content_w3_agile_info">
				<!-- /agile_top_w3_grids-->
				<div class="agile_top_w3_grids">
					<ul class="ca-menu">
						<li>
							<a href="manage_drivers.php">

								<i class="fa fa-truck" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main">
										<?php 
										$query="SELECT count(*) as total from driver";
										$result=mysqli_query($con,$query);
										confirm_query($result);
										$data=mysqli_fetch_assoc($result);
										echo $data['total'];
										?>


									</h4>
									<h3 class="ca-sub">Manage Drivers</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="manage_customers.php">
								<i class="fa fa-user" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main one">
										<?php 
										$query="SELECT count(*) as total from customer";
										$result=mysqli_query($con,$query);
										confirm_query($result);
										$data=mysqli_fetch_assoc($result);
										echo $data['total'];
										?>

									</h4>
									<h3 class="ca-sub one">Manage Clients</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="add_payment.php">
								<i class="fa fa-money" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main two">+ 1


									</h4>
									<h3 class="ca-sub two">Add Payment</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="manage_payments.php">
								<i class="fa fa-tasks" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main three">
										<?php 
										$query="SELECT count(*) as total from mpesa";
										$result=mysqli_query($con,$query);
										confirm_query($result);
										$data=mysqli_fetch_assoc($result);
										echo $data['total'];
										?>

									</h4>
									<h3 class="ca-sub three">Manage Payments</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="manage_orders.php">
								<i class="fa fa-clone" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main four">
										<?php 
										$query="SELECT count(*) as total from cargo";
										$result=mysqli_query($con,$query);
										confirm_query($result);
										$data=mysqli_fetch_assoc($result);
										echo $data['total'];
										?>


									</h4>
									<h3 class="ca-sub four">Manage Orders</h3>
								</div>
							</a>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<!-- //agile_top_w3_grids-->
				<!-- /agile_top_w3_post_sections-->
				<div class="agile_top_w3_post_sections">
					<div class="col-md-6 agile_top_w3_post agile_info_shadow">
						<div class="img_wthee_post">
							<h3 class="w3_inner_tittle">Latest Report</h3>
							<div class="stats-wrap">
								<div class="count_info"><h4 class="count"> <?php 
								$query="SELECT       `customer`,
								COUNT(`customer`) AS `frequent` 
								FROM     `cargo`
								GROUP BY `customer`
								ORDER BY `frequent` DESC
								LIMIT    1";
								$results=mysqli_query($con,$query);
								confirm_query($results);
								$data=mysqli_fetch_assoc($results);
								echo $data['customer'];
								?> 
							</h4><span class="year">Most Frequent Client</span></div>
							<div class="year-info"><p class="text-no">
								<?php 
								$query="SELECT       `customer`,
								COUNT(`customer`) AS `frequent` 
								FROM     `cargo`
								GROUP BY `customer`
								ORDER BY `frequent` DESC
								LIMIT    1";
								$results=mysqli_query($con,$query);
								confirm_query($results);
								$data=mysqli_fetch_assoc($results);
								echo $data['frequent'];
								?>
							</p><span class="year">Total Orders</span></div>
							<div class="clearfix"></div>
						</div>

						<div class="stats-wrap">
							<div class="count_info"><h4 class="count"> <?php 
							$query="SELECT       `cargo_type`,
							COUNT(`cargo_type`) AS `frequent` 
							FROM     `cargo`
							GROUP BY `cargo_type`
							ORDER BY `frequent` DESC
							LIMIT    1";
							$results=mysqli_query($con,$query);
							confirm_query($results);
							$data=mysqli_fetch_assoc($results);
							echo $data['cargo_type'];
							?> 
						</h4><span class="year">Most Transported Consignment</span></div>
						<div class="year-info"><p class="text-no">
							<?php 
							$query="SELECT       `cargo_type`,
							COUNT(`cargo_type`) AS `frequent` 
							FROM     `cargo`
							GROUP BY `cargo_type`
							ORDER BY `frequent` DESC
							LIMIT    1";
							$results=mysqli_query($con,$query);
							confirm_query($results);
							$data=mysqli_fetch_assoc($results);
							echo $data['frequent'];
							?>
						</p><span class="year">Deliveries</span></div>
						<div class="clearfix"></div>
					</div>

                <div class="stats-wrap">
							<div class="count_info"><h4 class="count"> <?php 
							$query="SELECT       `destination`,
							COUNT(`destination`) AS `frequent` 
							FROM     `cargo`
							GROUP BY `destination`
							ORDER BY `frequent` DESC
							LIMIT    1";
							$results=mysqli_query($con,$query);
							confirm_query($results);
							$data=mysqli_fetch_assoc($results);
							echo $data['destination'];
							?> 
						</h4><span class="year">Most Delivered Destination</span></div>
						<div class="year-info"><p class="text-no">
							<?php 
							$query="SELECT       `destination`,
							COUNT(`destination`) AS `frequent` 
							FROM     `cargo`
							GROUP BY `destination`
							ORDER BY `frequent` DESC
							LIMIT    1";
							$results=mysqli_query($con,$query);
							confirm_query($results);
							$data=mysqli_fetch_assoc($results);
							echo $data['frequent'];
							?>
						</p><span class="year">Total Visits</span></div>
						<div class="clearfix"></div>
					</div>

					<div class="stats-wrap">
							<div class="count_info"><h4 class="count"> <?php 
							$query="SELECT       `driver`,
							COUNT(`driver`) AS `frequent` 
							FROM     `cargo`
							GROUP BY `driver`
							ORDER BY `frequent` DESC
							LIMIT    1";
							$results=mysqli_query($con,$query);
							confirm_query($results);
							$data=mysqli_fetch_assoc($results);
							echo $data['driver'];
							?> 
						</h4><span class="year">Most Active Driver</span></div>
						<div class="year-info"><p class="text-no">
							<?php 
							$query="SELECT       `driver`,
							COUNT(`driver`) AS `frequent` 
							FROM     `cargo`
							GROUP BY `driver`
							ORDER BY `frequent` DESC
							LIMIT    1";
							$results=mysqli_query($con,$query);
							confirm_query($results);
							$data=mysqli_fetch_assoc($results);
							echo $data['frequent'];
							?>
						</p><span class="year">Total Deliveries</span></div>
						<div class="clearfix"></div>
					</div>



                 
				</div>
			</div>



			<div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
				<div class="img_wthee_post1">
					<h3 class="w3_inner_tittle" style="color: orange"> Hours Online</h3>
					<div class="main-example">
						<div class="clock"></div>
						<div class="message"></div>

					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="prograc-blocks_agileits">


			<div class="col-md-6 bars_agileits agile_info_shadow">
				<h3 class="w3_inner_tittle two">Daily Sales</h3>
				<div class='bar_group'>
					<div class='bar_group__bar thin' label='Rating' show_values='true' tooltip='true' value='0'></div>
					<div class='bar_group__bar thin' label='Quality' show_values='true' tooltip='true' value='0'></div>
					<div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true' value=''></div>
					<div class='bar_group__bar thin' label='Distance' show_values='true' tooltip='true' value='0'></div>
				</div>



			</div>


			<div class="col-md-6 fallowers_agile agile_info_shadow">
				<h3 class="w3_inner_tittle two">Recent Customers</h3>
				<div class="work-progres">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>

								<tr>
									<th>#</th>
									<th>Username</th>
									<th>Email</th>                                   

									<th>Join Date</th>
									<th>Progress</th>
								</tr>
							</thead>
							<tbody>
								<?php 


								$count=1;
								$sel_query="SELECT * FROM customer  ORDER BY customer_id DESC LIMIT 6; ";
								$result = mysqli_query($con,$sel_query);
								confirm_query($result);
								while($row = mysqli_fetch_assoc($result)) 
									{ ?>

										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $row["username"] ; ?></td>
											<td><?php echo $row["email"] ; ?></td>                                 

											<td><span class="label label-success"><?php echo $row["creation_date"] ; ?></span></td>
											<td><span class="badge badge-info">50%</span></td>
										</tr>
										<?php $count++; } ?>

									</tbody>
								</table>
							</div>
						</div>											
					</div>
					<div class="clearfix"></div>
				</div>





				<!--//prograc-blocks_agileits-->


				<!-- //bottom_agileits_grids-->
				<!-- /weather_w3_agile_info-->
				<div class="weather_w3_agile_info agile_info_shadow">
					<div class="weather_w3_inner_info">

						<div class="over_lay_agile">
							<h3 class="w3_inner_tittle">Weather Report</h3>
							<ul>
								<li>
									<figure class="icons">
										<canvas id="partly-cloudy-day" width="60" height="60"></canvas>
									</figure>
									<h3>25 °C</h3>
									<div class="clearfix"></div>
								</li>
								<li>
									<figure class="icons">
										<canvas id="clear-day" width="60" height="60"></canvas>
									</figure>
									<div class="weather-text">
										<h4>WED</h4>
										<h5>27 °C</h5>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<figure class="icons">
										<canvas id="snow" width="60" height="60"></canvas>
									</figure>
									<div class="weather-text">
										<h4>THU</h4>
										<h5>13 °C</h5>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<figure class="icons">
										<canvas id="partly-cloudy-night" width="60" height="60"></canvas>
									</figure>
									<div class="weather-text">
										<h4>FRI</h4>
										<h5>18 °C</h5>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<figure class="icons">
										<canvas id="cloudy" width="60" height="60"></canvas>
									</figure>
									<div class="weather-text">
										<h4>SAT</h4>
										<h5>15 °C</h5>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<figure class="icons">
										<canvas id="fog" width="60" height="60"></canvas>
									</figure>
									<div class="weather-text">
										<h4>SUN</h4>
										<h5>11 °C</h5>
									</div>
									<div class="clearfix"></div>
								</li>
							</ul>
						</div>
					</div>	
				</div>
				<!-- //weather_w3_agile_info-->

				<div class="clearfix"></div>

			</div>
			<!-- //social_media-->
		</div>
		<!-- //inner_content_w3_agile_info-->
	</div>
	<!-- //inner_content-->
</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	<p>© 2017-<?php echo date("Y");?> Roy Transmoters. All rights reserved 
	</p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- /amcharts -->
<script src="js/amcharts.js"></script>
<script src="js/serial.js"></script>
<script src="js/export.js"></script>	
<script src="js/light.js"></script>
<!-- Chart code -->

<!-- Chart code -->


<!-- //amcharts -->
<script src="js/chart1.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
	new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<!-- script-for-menu -->

<!-- /circle-->
<script type="text/javascript" src="js/circles.js"></script>
<script>
	var colors = [
	['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
	];
	for (var i = 1; i <= 7; i++) {
		var child = document.getElementById('circles-' + i),
		percentage = 30 + (i * 10);

		Circles.create({
			id:         child.id,
			percentage: percentage,
			radius:     80,
			width:      10,
			number:   	percentage / 1,
			text:       '%',
			colors:     colors[i - 1]
		});
	}

</script>
<!-- //circle -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
	var icons = new Skycons({"color": "#fcb216"}),
	list  = [
	"partly-cloudy-day"
	],
	i;

	for(i = list.length; i--; )
		icons.set(list[i], list[i]);
	icons.play();
</script>
<script>
	var icons = new Skycons({"color": "#fff"}),
	list  = [
	"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
	],
	i;

	for(i = list.length; i--; )
		icons.set(list[i], list[i]);
	icons.play();
</script>
<!--//skycons-icons-->
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
<script src="js/flipclock.js"></script>

<script type="text/javascript">
	var clock;

	$(document).ready(function() {

		clock = $('.clock').FlipClock({
			clockFace: 'HourlyCounter'
		});
	});
</script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>