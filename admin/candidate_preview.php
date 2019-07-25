<?php
include 'inc/header.php';
include 'inc/sidebar.php';
$id = $_GET['id'];
$fetch = mysql_query("SELECT * FROM candidate WHERE id = '$id'");
$row = mysql_fetch_array($fetch);
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header">Candidates Account</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Account Preview/Edit for <b>"<?php echo $row['fullname'] ?>"</b></h3>
				</div>
				<div class="panel-body">
					<form method="post" action="#">
						<div class="form-group">
		         	<input type="text" name="fullname" class="form-control" placeholder="Candidate's Fullname" value="<?php echo $row['fullname'] ?>">
		         </div>
		         <div class="form-group">
		         	<input type="text" name="gender" class="form-control" placeholder="State of Origin" value="<?php echo $row['gender'] ?>">
		         	
		         </div>
		         <div class="form-group">
		         	<input type="text" name="lga" class="form-control" placeholder="Level" value="<?php echo $row['lga'] ?>">
		         </div>
		         <div class="form-group">
		         	<input type="text" name="state_of_origin" class="form-control" placeholder="Staff Number" value="<?php echo $row['state_of_origin']?>">
		         </div>
		         <div class="form-group">
		         	<input type="text" name="party" class="form-control" placeholder="LGA" value="<?php echo $row['party'] ?>">
		         </div>
		         <!--<div class="form-group">
		         	<input type="text" name="post" class="form-control" placeholder="State of Origin" value="<?php //echo $row['post'] ?>">
		         </div>-->
		         <div class="form-group">
		         	<input type="text" name="post" class="form-control" placeholder="Post" value="<?php echo $row['post'] ?>" readonly>
		         </div>
		         <div class="form-group">
		         	<center><img src="uploads/<?php echo $row['passport']?>" class="img-responsive img-circle" width="70" height="70"></center>
		         </div>
				 <div class="form-group">
		         	<center><img src="party_logos/<?php echo $row['party_logo']?>" class="img-responsive img-circle" width="70" height="70"></center>
		         </div>
			      <center><div class="form-group">
			            <a href="candidates.php" class="btn btn-default btn-simple">Cancel</a>
			            <button name="update" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> Update</button>
			      </div></center>
		      </div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
if (isset($_POST['update'])) {
	$fullname = $_POST['fullname'];
	$gender = $_POST['gender'];
	$lga = $_POST['lga'];
	$state_of_origin = $_POST['state_of_origin'];
	$party = $_POST['party'];
	$post = $_POST['post'];
	//$post = $_POST['post'];
	$id = $row['id'];
	$query = mysql_query("UPDATE candidate SET fullname = '$fullname', gender = '$gender', lga = '$lga', state_of_origin = '$state_of_origin', party = '$party', post = '$post' WHERE id = '$id'");
	if ($query) {
		echo "<script>alert('Account updated successfully')</script>";
		echo "<script>window.open('candidates.php','_self')</script>";
	}else{
		echo mysql_error();
	}
}
include 'inc/footer.php';
?>