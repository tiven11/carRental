<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
		.txt{
			width: 600px;
			height: 200px;
		}

	</style>
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
				<h1 class="logo">Movie Car</h1>
				
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass']))
					?>
					<ul>
					            <li><a href="indexuser.php">Home</a></li>
								<li><a href="profile.php">Profile</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message</a></li>
								<li><a href="admin/logout.php">Logout</a></li>				
					
					</ul>
					</header>
					</section>


			
			<section>
		
			<ul style="text-align:center" class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
			
				<li>
						<h2 style="text-align:center"><span style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px">Booking Status:</span> 
						<hr>
						<span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
				</li>
			</ul>
			
			</section>
<hr>
			

</body>
</html>