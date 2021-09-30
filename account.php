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
						<li><a href="maps.php">Contact</a></li>
						<li><a href="account.php">Client Login</a></li>
						<li><a href="login.php">Admin Login</a></li>

					
					
					</ul>
					</header>
					</section>
	

	<section class="">
		<div >
		<div  id="fom">
			<form  method="post">
			<h3 style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px;">Client</h3>
			<hr>
				
					<ul style="text-align:center">
						<ul> 
							<h5 style="text-align:center; color: #0073FF; font-size:20px;">
								Email Address:
							</h5>
						</ul>
						</br>
						<ul>
						<input style="text-align:center; color: #0073FF; font-weight:bold;" type="email"  name="email" placeholder="Enter Email Address" required>
						</ul>
						</br>
				
						<h5 style="text-align:center; color: #0073FF; font-size:20px;">
								Password:
						</h5>
						</br>
						<ul><input style = "text-align:center; color: #0073FF; font-weight:bold;" type="password" name="pass" placeholder="Enter ID Number" required></ul>
						</br>
				
						<ul style="text-align:center">
						<input style="text-align:center; color: #0073FF; font-weight:bold;" type="submit" name="log" value="Login Here">
						</ul>
						</br>
						<ul><a href="signup.php">Sing Up</a></ul>
					</ul>
			
				<hr>
			</form>

			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful, Welcome user.\");
									window.location = (\"indexuser.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"The email address you entered isn't connected to an account. Find your email and password to log in.\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section>
	
	
</body>
</html>