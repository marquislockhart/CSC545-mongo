<?php

require 'vendor/autoload.php';
$m = new MongoDB\Client("mongodb://localhost:27017");
$db = $m->artgallery;

//check connection
if($conn->connect_error){
	die("Error accessing database: " . $conn->connect_error);
}
?>
