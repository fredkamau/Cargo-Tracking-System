
<?php 
 session_start(); 
include '../includes/functions.php';
include '../includes/db_connection.php';
  
$cost=$_SESSION['cost'] ;

$code = test_input($_REQUEST['code']);
$query2 = "SELECT amount FROM mpesa where transaction_code='{$code}' limit 1";
$result2 = mysqli_query($con,$query2);
confirm_query($result2);
$row= mysqli_fetch_assoc($result2);
$amount =$row["amount"];

  if ($amount >= $cost ) {
$cargo_id=$_SESSION['cargo_id'];
$query3="UPDATE cargo SET cleared=1 where cargo_id='{$cargo_id}'";
$result3 = mysqli_query($con,$query3);
confirm_query($result3);
redirect_to("invoice.php");

  }else{
  	echo"<script>alert('Please pay the full amount or check your code again');location.href='invoice.php';</script>";

  }
?>
