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
				<h1 class="logo">Movie Car</h1>
				
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass']))
					?>
					<ul>
								<li><a href="profile.php">profile</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="admin/logout.php">Logout</a></li>				
					
					</ul>
					</header>
					</section>



	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h2 style="text-align:center; color:#0073FF; font-family: 'Courier New', Courier, monospace">THANKS FOR YOUR REQUEST </br> WE WILL INFORM YOU AS SOON AS POSSIBLE
			</ul>
			
		</div>
	</section>

	
	
</body>
</html>