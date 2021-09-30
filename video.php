<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rental Car</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

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
						<li><a href="cuenta.php">Client Login</a></li>
						<li><a href="login.php">Admin Login</a></li>

					
					
					</ul>
					</header>
					</section>

                    <iframe  style= "padding: 30px 300px" width="760" height="415" src="https://www.youtube.com/embed/ue8rIsOPBrg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>