<!DOCTYPE html>
<html lang="en">
<head>

	<title>Rental Car</title>

	
</head>	
	




<h2 style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px;">

<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Approved' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Admin, you have approved this car ';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
</h2>
</html>