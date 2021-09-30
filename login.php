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
						<li><a href="index.php">Home</a></li>
						<li><a href="maps.php">Contact</a></li>
						<li><a href="account.php">Client Login</a></li>
						<li><a href="login.php">Admin Login</a></li>

					
					
					</ul>
					</header>
					</section>


	<section>
		<div >
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px;">Admin</h3>
			<hr>
					<ul style="txt-align: center">
					<ul>
						<h5 style="text-align:center; color: #0073FF; font-size:20px;">
								User Name:
						</h5>
					</ul>
					</br>
					<ul style="text-align:center">
					<input style="text-align:center; color: #0073FF; font-weight:bold;" type="text" name="uname" placeholder="Enter Username" required>
					</ul>
					</br>			
					<h5 style="text-align:center; color: #0073FF; font-size:20px;">
							Password:
					</h5>
					</br>
					<ul style="text-align:center">
					<input style ="text-align:center; color: #0073FF; font-weight:bold;" type="password" name="pass" placeholder="Enter Password" required>
					</ul>
					</br>								
					<ul style="text-align:center">
					<input style = "text-align:center; color: #0073FF; font-weight:bold;" type="submit" name="login" value="Login Here">
					</ul>
				
				<hr>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful, Welcome Admin\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"The User name you entered isn't connected to an account. Find your User name and password to log in.\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

	
</body>
</html>