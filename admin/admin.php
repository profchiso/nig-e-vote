<?php
include 'inc/header.php';
include 'inc/sidebar.php';
$fetch = mysql_query("SELECT * FROM admin");
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> INEC Administrator's Portal</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Add INEC Admin</h3>
					<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#candidateReg"><i class="fa fa-plus"></i> ADD NEW ADMIN</a>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
							<th>ID</th>	
							<th>Admin Name</th>
							<th>Username</th>
							
							<th>Admin Password</th>
							<th>Actions</th>
						</thead>
						<tbody>
							<?php
								while ($row = mysql_fetch_array($fetch)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['Admin_name']?></td>
								<td><?php echo $row['Admin_username']?></td>
								
								<td><?php echo $row['Admin_pwd']?></td>



								<td><a href="admin_preview.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a><a data-toggle="modal" data-target="#delete<?php echo $row['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
							</tr>



							<div class="modal fade" id="delete<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
									      <div class="modal-body">
									      Do you want to delete the account of <b><?php echo $row['Admin_name']?></b>
									        </div>
									      <div class="modal-footer">
									            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
									            <a name="update" href="admin_del.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-simple"><i class="fa fa-check-square"></i> Delete</a>
										      </div>
							    </div>
							  </div>
							  </div>


							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="candidateReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>ADD NEW ADMIN</center></h4>
      </div>
         <form method="post" action="#" enctype="multipart/form-data">
		      <div class="modal-body">
		         <div class="form-group">
		         	<input type="text" name="admin_name" class="form-control" placeholder="Admin Name">
		         </div>
				 <div class="form-group">
		         	<input type="text" name="username" class="form-control" placeholder="Username">
		         </div>
				 
		         
		         <div class="form-group">
		         	<input type="password" name="admin_pwd" class="form-control" placeholder="Admin Password">
		         </div>
		      </div>
		      <div class="modal-footer">
		            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
		            <button name="register" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> Register</button>
		      </div>
         </form>
    </div>
  </div>
  </div>
<?php
if(isset($_POST["register"])) {
	$admin_name = $_POST['admin_name'];
	$username = $_POST['username'];

	$admin_pwd = $_POST['admin_pwd'];
		        $sql = mysql_query("INSERT INTO admin(Admin_name,Admin_username,Admin_pwd)VALUES('$admin_name','$username','$admin_pwd')");
			        if ($sql) {
			        	echo "<script>alert('Administrator has been registered into the database!')</script>";
			        	echo "<script>window.open('admin.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
			    }
include 'inc/footer.php';
?>