<?php
include 'inc/header.php';
include 'inc/sidebar.php';
$fetch = mysql_query("SELECT * FROM candidate");
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header">Party Candidates Portal</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Registered Party Candidates</h3>
					<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#candidateReg"><i class="fa fa-plus"></i> ADD NEW CANDIDATE</a>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
							<th>ID</th>
							<th>Fullname</th>
							<th>Gender</th>
							<th>LGA</th>
							<th>State</th>
							<th>Party</th>
							<th>Post</th>
							<th>Passport</th>
							<th>Party Logo</th>
							<th><i class="fa fa-bars"></i></th>
						</thead>
						<tbody>
							<?php
								while ($row = mysql_fetch_array($fetch)) {
							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['fullname']?></td>
								<td><?php echo $row['gender']?></td>
								<td><?php echo $row['lga']?></td>
								<td><?php echo $row['state_of_origin']?></td>
								<td><?php echo $row['party']?></td>
								<td><?php echo $row['post']?></td>
								<td><img src="uploads/<?php echo $row['passport']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<td><img src="party_logos/<?php echo $row['party_logo']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<td><a href="candidate_preview.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a><a data-toggle="modal" data-target="#delete<?php echo $row['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
							</tr>
							<div class="modal fade" id="delete<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
									      <div class="modal-body">
									      Do you want to delete the account of <b><?php echo $row['fullname']?></b>
									        </div>
									      <div class="modal-footer">
									            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
									            <a name="update" href="candidate_del.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-simple"><i class="fa fa-check-square"></i> Delete</a>
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
        <h4 class="modal-title" id="myModalLabel"><center>ADD NEW CANDIDATE</center></h4>
      </div>
         <form method="post" action="#" enctype="multipart/form-data">
		      <div class="modal-body">
		         <div class="form-group">
		         	<input type="text" name="fullname" required class="form-control" placeholder="Candidate's Fullname">
		         </div>
		         <div class="form-group">
		         	<select name="gender" class="form-control">
		         		<option selected="" disabled="">Select Gender</option>
		         		<option value="Male">Male</option>
		         		<option value="Female">Female</option>
		         	</select>
		         </div>
		         
				 
		         
		         <div class="form-group">
		         	<input type="text" name="lga" required class="form-control" placeholder="LGA">
		         </div>
		         <div class="form-group">
		         	<input type="text" name="state_of_origin" required class="form-control" placeholder="State of Origin">
		         </div>
				 <div class="form-group">
		         	<input type="text" name="party" required class="form-control" placeholder="Party">
		         </div>
		         <div class="form-group">
		         	<select class="form-control" name="post" required>
		         		<option selected="" disabled="">Select Post</option>
		         		<option value="President">President</option>
		         		<option value="Senate">Senate</option>
						 <option value="HouseOfRep">House Of Rep</option>
						 <option value="Governors">Governor</option>
		         		<option value="HouseOfAss">House Of Ass</option>

		         	</select>
		         </div>
		         <div class="form-group">
				 <label>upload candidate passport</label>
		         	<input type="file" name="candidate_passport" class="form-control" placeholder="" required>
		         </div>
				 <div class="form-group">
				 <label>upload party logo</label>
		         	<input type="file" name="party_logo" class="form-control" value="" required>
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
	$target_dir = "uploads/";
	$target_dir1 = "party_logos/";
	$uploadOk = 1;
	$uploadOk2 = 1;
	$target_file1 = $target_dir . basename($_FILES["candidate_passport"]["name"]);
	$target_file2 = $target_dir1 . basename($_FILES["party_logo"]["name"]);
	$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
	$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
	// Check file size
	if (($_FILES["candidate_passport"]["size"] > 2000000) || ($_FILES["party_logo"]["size"] > 2000000)) {
	    echo "<script>alert('Picture file is too large')</script>";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if(($imageFileType1 != "png" && $imageFileType1 != "jpg" && $imageFileType1 != "jpeg")||($imageFileType2 != "png" && $imageFileType2 != "jpg" && $imageFileType2 != "jpeg")) {
		//echo "Sorry, only JPEG, JPG, and PNG allowed";
		echo "<script>alert('Sorry, only JPEG, JPG, and PNG allowed')</script>";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		//echo "Sorry, your file was not uploaded";
		echo "<script>alert('Sorry, your file was not uploaded')</script>";

	// if everything is ok, try to upload file
	} else {
	$fullname = $_POST['fullname'];
	$gender = $_POST['gender'];
	$lga = $_POST['lga'];
	$state_of_origin = $_POST['state_of_origin'];
	$party = $_POST['party'];
	$post = $_POST['post'];
	$candidate_passport= $_FILES["candidate_passport"]["name"];
	$party_logo=$_FILES["party_logo"]["name"];

			if (move_uploaded_file($_FILES["candidate_passport"]["tmp_name"], $target_file1) &&  move_uploaded_file($_FILES["party_logo"]["tmp_name"], $target_file2)) {
		        $sql = mysql_query("INSERT INTO candidate(fullname,gender,lga,state_of_origin,party,post,passport,party_logo)VALUES('$fullname','$gender','$lga','$state_of_origin','$party','$post','$candidate_passport','$party_logo')");
			        if ($sql) {
			        	echo "<script>alert('Candidate has been registered into the database!')</script>";
			        	echo "<script>window.open('candidates.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
			    }
		}
	}
include 'inc/footer.php';
?>