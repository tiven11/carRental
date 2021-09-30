<?php
	error_reporting(0);
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			
			<div  id="top-navigation">
				<h4>Administrator</h4></a>
				
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div  id="navigation">
			<ul>
			    <li><a href="index.php"><span>Messages</span></a></li>
			    <li><a href="add_vehicles.php"><span>Cars</span></a></li>
			    <li><a href="client_requests.php"><span>Requests</span></a></li>
				<li><a href="add_cars.php"><span>Add Car</span></a></li>
			   
			</ul>
		</div>