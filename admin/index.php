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

<div id="container">
	<div class="shell">
	
		<br />
		<div id="main">
			<div class="cl">&nbsp;</div>
			
				<div id="content">
				
					<div class="box">
		
						<section >

						<div class="table">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							
							</table>
						</div>
	</br>
						<div class="table">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">

							<td style="text-align:left; color: #0073FF; font-size:15px">cliente ID</td>
							
							<td style="text-align:left; color: #0073FF; font-size:15px">message</td>
							
							<td style="text-align:left; color: #0073FF; font-size:15px">activity</td>
							
									<?php
								include '../includes/config.php';
								$select = "SELECT * FROM message";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
									?>
								<tr>
								<td ><?php echo $row['client_id'] ?></td>
								<td ><li><?php echo $row['message'] ?></li></td>
								
							
								<td ><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)" class="ico del">Delete</a></td>
								</tr>
								<?php
								}
								?>
							</table>
						</div>
				
			
			
			
					</section>
		
				</div>
		
			</div>
		
		</div>
				
				
	</div>					
		


</div>

</body>
</html>