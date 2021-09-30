<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rental Car</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

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

                   

                

                    <h3 style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px;"> WE ARE HERE</h3>

                  

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.4251048815463!2d172.64492781515833!3d-43.53517979017816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9443153dd7afeb8d!2sAspire%202%20International-%20Christchurch%20Campus!5e0!3m2!1ses!2snz!4v1617871100938!5m2!1ses!2snz" width="1200" height="450" style="padding:30px 30px" allowfullscreen="" loading="lazy"> <link rel="stylesheet" href=""></iframe>
                        <h3 style = "text-align:center" ><a style="text-align:center; color: rgba(0, 115, 255, 1); font-size:25px;" href="video.php">clic here </a></h3>

                    </section>
