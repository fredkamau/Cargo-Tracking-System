<?php 
session_start();

 fuction message(){
if (isset($_SESSION["message"])) {
	$output ="<div class =\"message\">";
	$output .=htmlentities($_SESSION["message"]) ;
	$output .= "</div>";

	//clear the message after use
	$_SESSION["message"]=null;
	return $output;
} 
 }
 ?>