<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rental Car</title>
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
						<li><a href="maps.php">Contact</a></li>
						<li><a href="account.php">Client Login</a></li>
						<li><a href="login.php">Admin Login</a></li>

					
					
					</ul>
					</header>
					</section>



	<section  class= "listings" style="text-align:center">
		<div class="">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img src="cars/<?php echo $rws['image'];?>" width="450" height="300">
					</a>
					
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo ''.$rws['car_type'];?></a>
						</h1>
						
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	
	
	</body>
	</html>