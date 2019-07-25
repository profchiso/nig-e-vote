<?php
include 'inc/header.php';
include 'inc/sidebar.php';
$id = $_GET['id'];
$fetch = mysql_query("SELECT * FROM admin WHERE id = '$id'");
$row = mysql_fetch_array($fetch);
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header">Admin Account</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Account Preview/Edit for <b>"<?php echo $row['Admin_name'] ?>"</b></h3>
				</div>
				<div class="panel-body">
					<form method="post" action="#">
						<div class="form-group">
		         	<input type="text" name="fullname" class="form-control" placeholder="Candidate's Fullname" value="<?php echo $row['Admin_name'] ?>">
		         </div>
		         <div class="form-group">
		         	<input type="text" name="username" class="form-control" placeholder="State of Origin" value="<?php echo $row['Admin_username'] ?>">
		         	
		         </div>
		         <div class="form-group">
		         	<input type="text" name="password" class="form-control" placeholder="Level" value="<?php echo $row['Admin_pwd'] ?>">
		         </div>
			      <center><div class="form-group">
			            <a href="admin.php" class="btn btn-default btn-simple">Cancel</a>
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
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("UPDATE admin SET Admin_name = '$fullname', Admin_username = '$username', Admin_pwd = '$password' WHERE id = '$id'");
	if ($query) {
		echo "<script>alert('Account updated successfully')</script>";
		echo "<script>window.open('admin.php','_self')</script>";
	}else{
		echo mysql_error();
	}
}
include 'inc/footer.php';
?>