<?php
	include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rental Car</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	

	<link rel="stylesheet" href="css/stylehome.css" type="text/css" media="all" />

	<script type="text/javascript">

		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
			}
		}
	</script>
</head>

<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2 style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px;">Add Car</h2>
					</div>
	</br>
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p style="text-align:center; color: #0073FF; font-size:20px;">
									<span class="req"></span>
									<label>Vehicle Name <span></span></label>
									<input type="text" class="field size1" name="car_name" required />
								</p>

								</br>

								<p style="text-align:center; color: #0073FF; font-size:20px;" >
									<span class="req"></span>
									<label>Vehicle Make <span></span></label>
									<input type="text" class="field size1" name="car_type" required />
								</p>

								</br>

								<p style="text-align:center; color: #0073FF; font-size:20px;" >
									<span class="req"></span>
									<label>Vehicle Hire Price <span></span></label>
									<input type="text" class="field size1" name="hire_cost" required />
								</p>

								</br>

								<p style="text-align:center; color: #0073FF; font-size:20px;" >
									<span class="req"></span>
									<label>Car Image <span></span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
									
							
						</div>
						</br>
						<div style="text-align:center; color: #0073FF; font-size:20px;"  class="buttons">
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						</br>
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
				</br>
					<div class="box-head">
						<h2 style="text-align:center; color: #0073FF; font-weight:bold; font-size:35px;" >Cars</h2>
					</div>
					</br>
					<div style="text-align:center; color: #0073FF; font-size:20px;"  class="box-content">
						<a href="add_vehicles.php" class="add-button"><span>View Our Vehicles</span></a>
						</br>												
					</div>
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>


	
</body>
</html>