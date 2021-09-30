<?php
	$host = "localhost:3307";
	$user = "root";
	$pass = "";
	$db = "cars";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>