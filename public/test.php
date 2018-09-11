  <?php include '../includes/functions.php'; ?>
  <?php include '../includes/db_connection.php'; ?>
  <?php session_start(); ?>
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
  echo $data['customer'];
  ?>
  <?php 
  $d=strtotime("today");
 $day= date("l   ", $d) ;
  substr( $day, 5)

  ?>
