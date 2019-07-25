<?php
include 'inc/header.php';
include 'inc/sidebar.php';

//require_once 'smsapi.php';
$fetch = mysql_query("SELECT * FROM citizens");


?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header">SMS invitation Portal</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="alert alert-success text-center" >INVITE VOTERS</h3>
					<form method="POST" action="smsapi.php"><button class="btn btn-success btn-sm" type="submit" name="sms"><i class="fa fa-plus"></i> SMS Eligible Voters</button></form>
					
				</div>
				<div class="table-responsive">
					<table class="table">
						<thead>
						<th>ID</th>
							<th>Last Name</th>
							<th>First Name</th>
					
							<th>Address</th>
						
							<th>Gender</th>
						
							<th>Phone Number</th>
						
							<th>VIN</th>
							<th>Year of Birth</th>
							
							<th>QRcode</th>
							<th><i class="fa fa-bars"></i></th>
						</thead>
						<tbody>
							<?php
								while ($row = mysql_fetch_array($fetch)) {
							?>
							<tr>
							<td><?php echo $row['id']?></td>
								<td><?php echo $row['last_name']?></td>
								<td><?php echo $row['first_name']?></td>
						
								<td><?php echo $row['address_of_residence']?></td>
							
								<td><?php echo $row['gender']?></td>
							
								<td><?php echo $row['phone_number']?></td>
								
								<td><?php echo $row['VIN']?></td>
								<td><?php echo $row['year_of_birth']?></td>
							
								<td><img src="phpqrcode/temp/<?php echo $row['QRcode']?>" class="img-responsive" width="100" height="100"></td>
								
								<td></td>
							</tr>
							
							
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
    </div>
  </div>
  </div>
<?php
include 'inc/footer.php';
?>