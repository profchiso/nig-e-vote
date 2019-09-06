<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'valid_PVC.php';
$id = $_GET['id'];
$fetch = mysql_query("SELECT * FROM citizens WHERE id = '$id'");
$row = mysql_fetch_array($fetch);
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> Account Validation</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Validate Account for <b>"<?php echo $row['email'] ?>"</b></h3>
				</div>
				<div class="panel-body">
					<form method="post" action="#">
						<div class="form-group">
		         	<input type="text" name="fullname" class="form-control" placeholder="Candidate's Fullname" value="<?php echo $row['last_name']." ". $row['first_name'] ?> " readonly>
		         </div>
		         <div class="form-group">
		         	<input type="text" name="phone" class="form-control" placeholder="State of Origin" value="<?php echo $row['phone_number'] ?> " readonly>
		         	
		         </div>
		         <div class="form-group">
		         	<input type="text" name="email" class="form-control" placeholder="Level" value="<?php echo $row['email'] ?> " readonly>
		         </div>
				 <div class="form-group">
		         	<input type="text" name="vin" class="form-control" placeholder="Enter Vin"  required">
		         </div>
			      <center><div class="form-group">
			            <!-- <a href="admin.php" class="btn btn-default btn-simple">Cancel</a> -->
			            <button name="update" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> Validate</button>
			      </div></center>
		      </div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
if (isset($_POST['update']) && isset($_POST['vin'])) {
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$vin = $_POST['vin'];

	if(!ValidateVin($vin)){
		echo "<script>alert('Vin not Valid')</script>";
	}else{

		$query = mysql_query("INSERT INTO voters SET fullname = '$fullname', phone = '$phone', email = '$email',VIN='$vin' ");
		if ($query) {
			echo "<script>alert('Account validated successfully')</script>";
			echo "<script>window.open('user.php','_self')</script>";
		}else{
			echo mysql_error();
		}

	}
	

}
include 'inc/footer.php';
?>