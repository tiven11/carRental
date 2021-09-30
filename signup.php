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
				<h1 class="logo">Movie Car</h1>
				
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


		<div class="">
		<div >	
		<div  id="fom">	
				<form method="post">
				<h3 style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px;">Signup Here</h3>	
				<hr>
						
						<h5 style="text-align:center; color: #0073FF; font-size:12px;">
								Full Name:
								<td><input type="text" name="fname" required></td>
						</h5>
						</ul>
						<ul>
						<h5 style="text-align:center; color: #0073FF; font-size:12px;">
								Phone Number:
								<td><input type="text" name="phone" required></td>		
						</h5>
						</ul>
						<ul>
						<h5 style="text-align:center; color: #0073FF; font-size:12px;">
						Email:
							<td><input type="email" name="email" required></td>
						</h5>
						</ul>
						<ul>
						<h5 style="text-align:center; color: #0073FF; font-size:12px;">
						ID number
							<td><input type="text" name="id_no" required></td>
						</h5>
						</ul>
						<ul>
						<h5 style="text-align:center; color: #0073FF; font-size:12px;">
						Gender:
							<td>
								<select style="text-align:center; color: #0073FF; font-weight:bold;" name="gender">
									
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</h5>
						</ul>
						<ul>
						<h5 style="text-align:center; color: #0073FF; font-size:12px;">
						Location:
							<td><input type="text" name="location" required></td>
						</h5>
						</ul>
						<ul style="text-align:center">
							
							<input style="text-align:center; color: #0073FF; font-size:12px;" type="submit" name="save" value="Submit Details"></td>
						</ul>
					<hr>
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"indexuser.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	
	
</body>
</html>