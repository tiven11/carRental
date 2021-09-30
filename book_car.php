<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
		
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
	
	<section class="listings">
		<div class="">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="450" height="300">
					</a>
					
					<div class="property_details">
						<h2>Price: $/Day <span class="property_size"><?php echo $rws['hire_cost'];?></span></h2>
					</div>

				</li>
				<h3 style="color:blue">Singup first </h3>

				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>

				<form method="post">
					
						<ul>
						<h5 style="color: #0073FF; font-size:12px;">
								Full Name:
								<td><input type="text" name="fname" required></td>
						</h5>
						</ul>
						<ul>
						<h5 style="color: #0073FF; font-size:12px;">
								Phone Number:
								<td><input type="text" name="phone" required></td>		
						</h5>
						</ul>
						<ul>
						<h5 style="color: #0073FF; font-size:12px;">
						Email:
							<td><input type="email" name="email" required></td>
						</h5>
						</ul>
						<ul>
						<h5 style="color: #0073FF; font-size:12px;">
						ID number
							<td><input type="text" name="id_no" required></td>
						</h5>
						</ul>
						
						
						<ul >
							
							<input style="color: #0073FF; font-weight:bold;" type="submit" name="save" value="Submit Details"></td>
						</ul>
					
				</form>
				<?php
					} else
						{
							?>
								<a href="pay.php">Click to Book</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Please Login New User\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>

	
	
</body>
</html>