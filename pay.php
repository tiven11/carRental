<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<section class="">
	<?php
	session_start();
	error_reporting(0);
?>

<header>
			<div class="wrapper">
				<h1 class="logo"> Movie Car</h1>
				
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass']))
					?>
					<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="admin/logout.php">Logout</a></li>				
					
					</ul>
					</header>
					</section>

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				
				<form method="post">
					<table>
					
							<h5 style="text-align:center; color: #0073FF; font-size:20px;">
							Credit Card Number:
							</h5>
							<ul style="text-align:center">
								<input style="text-align:center; color: #0073FF; font-weight:bold;" type="text" name="mpesa" required>
							</ul>
						
						
							<h5 style="text-align:center; color: #0073FF; font-size:20px;">
							CCV:
							</h5>
							
							<ul style="text-align:center">
							<input style="text-align:center; color: #0073FF; font-weight:bold;" type="text" name="id_no" required>
							</ul>

</br>
						
							<ul style="text-align:center">
							
							<input style="text-align:center; color: #0073FF; font-weight:bold;" type="submit" name="pay" value="Submit Details">
							
							</ul>

					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE client SET mpesa = '$mpesa' WHERE id_no = '$id_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
			
		</div>
	</section>

</body>
</html>