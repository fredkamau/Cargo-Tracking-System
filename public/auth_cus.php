<?php
session_start();
if(!isset($_SESSION["customer"])){
header("Location: signin.php");
exit(); }
?>