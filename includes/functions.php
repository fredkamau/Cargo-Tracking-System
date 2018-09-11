<?php 
function confirm_query($results_set){

  if (!$results_set) {
    global $con;
    die("failled to query the database ".mysqli_error($con));
  }  
} 
//escape the string
function mysqli_prep($string)
{
  global $con;
  $escaped_string=mysqli_real_escape_string($con,$string);
  return $escaped_string;
}

function redirect_to($new_location)
{
	header("Location: $new_location");
	exit;
}
//redirect_to(invoice.php);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}

  function rad($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
  {
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
      $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
  }

   function driver()
   {
     $a = ['antonnifo', 'tony', 'mayya','becy','antonio','joseph','antoo','antonnifo'];
   global $driver;
    $driver = $a[mt_rand(0, count($a) - 1)];
    return $driver;
   }

//echo rad(8);

  function IsChecked($chkname,$value)
  {
    if(!empty($_POST[$chkname]))
    {
      foreach($_POST[$chkname] as $chkval)
      {
        if($chkval == $value)
        {
          return true;

        }

      }

    }

    return false;

//         if(IsChecked('formDoor','A'))

// {

// //do somthing ...

// }

// //or use in a calculation ...
// $price += IsChecked('formDoor','A') ? 10 : 0;

// $price += IsChecked('formDoor','B') ? 20 : 0;


  }

  function cost($source,$sink,$amount){
    if ($source=="Turkana" && $sink=="Turkana") {
      global $distance;  
      $distance=50;
      $cost=$amount/100*$distance;
      return $cost;
    }

    if ($source=="Turkana" && $sink=="Kiziwi") {
      global $distance;  
      $distance=200;
      $cost=$amount/100*$distance;
      return $cost;}

      if ($source=="Turkana" && $sink=="Gilgil") {
        global $distance;  
        $distance=150;
        $cost=$amount/100*$distance;
        return $cost;}

        if ($source=="Kiziwi" && $sink=="Turkana") {
          global $distance;  
          $distance=200;
          $cost=$amount/100*$distance;
          return $cost;}

          if ($source=="Kiziwi" && $sink=="Kiziwi") {
            global $distance;  
            $distance=30;
            $cost=$amount/100*$distance;
            return $cost;}

            if ($source=="Kiziwi" && $sink=="Gilgil") {
              global $distance;  
              $distance=100;
              $cost=$amount/100*$distance;
              return $cost;}

              if ($source=="Gilgil" && $sink=="Gilgil") {
                global $distance;  
                $distance=30;
                $cost=$amount/100*$distance;
                return $cost;}

                if ($source=="Gilgil" && $sink=="Kiziwi") {
                  global $distance;  
                  $distance=100;
                  $cost=$amount/100*$distance;
                  return $cost;}

                  if ($source=="Gilgil" && $sink=="Turkana") {
                    global $distance;  
                    $distance=150;
                    $cost=$amount/100*$distance;
                    return $cost;}


                  }

//echo distance("Turkana","Gilgil",3000);














                  ?>