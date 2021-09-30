<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Rental Car</title>
	<link rel="stylesheet" href="css/stylehome.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
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
				
				
				
				
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<td style="text-align:left; color: #0073FF; font-size:15px" >Vehicle Make</td>
								<td style="text-align:left; color: #0073FF; font-size:15px">$/day</td>
								<td style="text-align:left; color: #0073FF; font-size:15px">Activity</td>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							
								<td><h3><?php echo $row['car_type'] ?></h3></td>
							
								<td><?php echo $row['hire_cost'] ?></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
					
						
					</div>
					
					
			

			</div>
			
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
	
	</div>
</div>



	
</body>
</html>



	
</body>
</html>