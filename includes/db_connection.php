<?php 
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'cargo');
    ?>
    <?php
	$con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if (mysqli_connect_errno()) {		
		die("Could not connect to the server" .
			mysqli_connect_errno() ."(" . mysqli_connect_error() . ")");
	}
	?>

	
