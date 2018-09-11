<?php include '../includes/functions.php'; ?>
	<?php include '../includes/db_connection.php'; ?>
	<?php //session_start(); ?>
	<?php include 'auth_admin.php'; ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/table-style.css" />
	<link rel="stylesheet" type="text/css" href="css/basictable.css" />
	<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<style media="screen">
  .noPrint{ display: block; }
  .two-axis{ display: block !important; }
</style>

<style media="print">
  .noPrint{ display: none; }
  .two-axis{ display: block !important; }
</style>

	</head>
	<body>
	<div class="inner_content_w3_agile_info two_in">
						 

										<!-- tables -->
										
										<div class="agile-tables">
											
								
										  
				  
				<div class="w3l-table-info agile_info_shadow">
				 
				 <h3>Our Customers</h3>
				  <input type="text" id="myInput" placeholder="Search for customers.." title="Type in a name" class="noPrint">
				 <button type="button" class="btn btn-default btn-flat btn-pri noPrint" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i>Print report</button>
				  <table id="table-two-axis" class="t wo-axis">
					<thead>
					  <tr>
					  	<th>S.no</th>
						<th>Username</th>
						<th>Email</th>
						<th>Creation Date</th>
						
			  		  </tr>
					</thead>
					<tbody id="myTable">
						<?php
    $count=1;
   $sel_query="SELECT * FROM customer  ORDER BY customer_id DESC; ";
   $result = mysqli_query($con,$sel_query);
             confirm_query($result);
   while($row = mysqli_fetch_assoc($result)) 
   	{ ?>
				  <tr>
				  	<td><?php echo  $count ; ?></td>
					<td><?php echo $row["username"] ; ?></td>
					<td><?php echo $row["email"] ; ?></td>
					<td><?php echo $row["creation_date"] ; ?></td>
		
				  </tr>
				  <tr>
				 <?php $count++; } ?>
				</tbody>
			  </table>
	

										  

										</div>
							</div>
								<!-- //tables -->
						
							
					    </div>
						<!-- //inner_content_w3_agile_info-->
					</div>
			<!-- //inner_content-->
	<!--copy rights start here-->

	<div class="copyrights">
		<p>© 2017-<?php echo date("Y");?> Roy Transmoters. All rights reserved 
		</p>
	</div>	
	</body>
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	</html>