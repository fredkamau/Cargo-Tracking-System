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
  #noPrint{ display: block; }
  .two-axis{ display: block !important; }
</style>

<style media="print">
  .noPrint{ display: none; }
  #noPrint{ display: none; }
  .two-axis{ display: block !important; }
</style>

	</head>
	<body>
	<div class="inner_content_w3_agile_info two_in">
						 

										<!-- tables -->
										
										<div class="agile-tables">
											
								
										  
				  
				<div class="w3l-table-info agile_info_shadow">
				 
				 <h3>Payments</h3>
				  <input type="text" id="myInput" placeholder="Search.." title="Type in a name" class="noPrint">

				  <button type="button" class="btn btn-info btn-flat btn-pri" onclick="window.print()" id="noPrint"><i class="fa fa-print" aria-hidden="true"></i>Print report</button>
				
				  <table id="table-two-axis" class="t wo-axis">
					<thead>
					  <tr>
						 <tr>
						 	<th>S.no</th>
						<th>Account Name</th>
						<th>Transaction Code</th>
						<th>Date</th>
						<th>Amount</th>
						
			  		  </tr>
			  		  </tr>
					</thead>
					<tbody id="myTable">
						<?php
    $count=1;
   $sel_query="SELECT * FROM mpesa  ORDER BY mpesa_id DESC; ";
   $result = mysqli_query($con,$sel_query);
             confirm_query($result);
   while($row = mysqli_fetch_assoc($result)) 
   	{ ?>
				  <tr>
				  	<td><?php echo  $count ; ?></td>
					<td><?php echo $row["account_name"] ; ?></td>
					<td><?php echo $row["transaction_code"] ; ?></td>
					<td><?php echo $row["date"] ; ?></td>
					<td><?php echo $row["amount"] ; ?></td>
					
		
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