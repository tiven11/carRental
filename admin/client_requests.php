<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Rental Car</title>
	<link rel="stylesheet" href="css/stylehome.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
	</div>
</div>

<div id="container">
	<div class="shell">
		
	
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							
								<td style="text-align:left; color: #0073FF; font-size:15px">Client Name</td>
								<td style="text-align:left; color: #0073FF; font-size:15px">Client Phone</td>
								<td style="text-align:left; color: #0073FF; font-size:15px">Car Booked</td>
								<td style="text-align:left; color: #0073FF; font-size:15px">$/day</td>
								<td style="text-align:left; color: #0073FF; font-size:15px">Status</td>
								<td style="text-align:left; color: #0073FF; font-size:15px">Activity</td>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT client.client_id,client.fname,client.phone,cars.car_name,cars.hire_cost,client.status 
										FROM client JOIN cars ON client.car_id=cars.car_id";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><h3><?php echo $row['fname'] ?></h3></td>
								<td><h3><?php echo $row['phone'] ?></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><?php echo $row['hire_cost'] ?></td>
								<td><?php echo $row['status'] ?></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['client_id'];?>)" class="ico del">Approve</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
					
						
					</div>
				
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->


	
</body>
</html>