<?php 
 session_start(); 
include '../includes/functions.php';
include '../includes/db_connection.php';
$cargo_id=$_REQUEST["id"];

$query="UPDATE cargo SET delivery_status=1 where cargo_id='{$cargo_id}' ";
$result = mysqli_query($con,$query);
confirm_query($result);

if ($result) {
	redirect_to("driver_home.php");
} else {
	echo "failed to update status";
}


 ?>