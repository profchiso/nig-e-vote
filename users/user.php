<?php
$email= $_SESSION['email'];
include 'inc/header.php';
include 'inc/sidebar.php';
$fetch = mysql_query("SELECT * FROM citizens WHERE email='$email'");
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h4 class="page-header text-center">Scan your QRcode to see your OTP for voting</h4>
			<h5 class="page-header text-center"><b><a href="logout.php"><?php echo $email.'    '.'';?> proceed to vote</a></b></h4>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					
					<h3 class="alert alert-success text-center" data-toggle="modal" data-target="#ccandidateReg"> MY Details</h3>
					
				</div>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<th>Last Name</th>
							<th>First Name</th>
						
							<th>Address of Residence</th>
							
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
							
								<td><?php echo $row['last_name']?></td>
								<td><?php echo $row['first_name']?></td>
						
								<td><?php echo $row['address_of_residence']?></td>
							
								<td><?php echo $row['gender']?></td>
						
								<td><?php echo $row['phone_number']?></td>
								
								<td><?php echo $row['VIN']?></td>
								<td><?php echo $row['year_of_birth']?></td>
							
								<td><img src="../admin/phpqrcode/temp/<?php echo $row['QRcode']?>" class="img-responsive" width="100" height="100"></td>
								
								<td></td>
							</tr>

							<div class="modal fade" id="edit<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        <h4 class="modal-title" id="myModalLabel"><center>EDIT VOTER'S ACCOUNT</center></h4>
								  </div>
								  
							         <form method="post" action="#" enctype="multipart/form-data">
									      <div class="modal-body">
									      	<div class="form-group">
									      		<input type="text" name="id" class="form-control" value="<?php echo $row['id']?>" readonly>
									      	</div>
									         <div class="form-group">
									         	<input type="text" name="last_name" readonly class="form-control" value="<?php echo $row['last_name']?>" placeholder="Candidate's Fullname">
											 </div>
											 <div class="form-group">
									         	<input type="text" readonly name="first_name" class="form-control" value="<?php echo $row['first_name']?>" placeholder="Staff Number">
											 </div>
											 <div class="form-group">
									         	<input type="text" readonly name="first_name" class="form-control" value="<?php echo $row['gender']?>" placeholder="Staff Number">
									         </div>
									        
		
									         <div class="form-group">
									         	<input type="text" name="phone_number" maxlength="11" class="form-control" value="<?php echo $row['phone_number']?>" placeholder="Phone Number">
									         </div>
									      </div>
									      <div class="modal-footer">
									            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
									            <button name="update" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> Update</button>
									      </div>
							         </form>
							         <?php
							         	if (isset($_POST['update'])) {
							         		$last_name = $_POST['last_name'];
							         		$first_name = $_POST['first_name'];
							         		$phone_number = $_POST['phone_number'];
							         		$id = $_POST['id'];
							         		$update_row = mysql_query("UPDATE citizens SET last_name = '$last_name', first_name = '$first_name', phone_number = '$phone_number' WHERE id = '$id' ");
							         		if ($update_row) {
							         			echo "<script>alert('Citizen data Updated Succesfully')</script>";
							         			echo "<script>window.open('voters.php','_self')</script>";
							         		}else{
							         			echo "<script>alert('".mysql_error()."')</script>";
							         		}
							         	}
							         ?>
							    </div>
							  </div>
							  </div>

							  <div class="modal fade" id="delete<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
									      <div class="modal-body">
									      Do you want to delete the account of <b><?php echo $row['last_name']?></b>
									        </div>
									      <div class="modal-footer">
									            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
									            <a name="update" href="voters_del.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-simple"><i class="fa fa-check-square"></i> Delete</a>
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
        <h4 class="modal-title" id="myModalLabel"><center>ADD NEW VOTER</center></h4>
      </div>

								

         <form method="post" action="#" enctype="multipart/form-data">
		      <div class="modal-body">
					<p class="alert alert-info text-center">All fields are Required</p>
		         <div class="form-group">
		         	<input type="text" name="last_name" required class="form-control" placeholder="Last Name">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="first_name" required class="form-control" placeholder="First Name">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="othernames" required class="form-control" placeholder="Othernames">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="town_of_residence" required class="form-control" placeholder="Town Of Residence">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="country_of_residence" required class="form-control" placeholder="country of residence">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="state_of_residence" required class="form-control" placeholder="state of residence">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="lga_of_residence" required class="form-control" placeholder="lga of residence">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="address_of_residence"  required class="form-control" placeholder="address of residence">
		         </div>
		         <div class="form-group">
		         	<select name="religion" class="form-control">
		         		<option selected="" disabled="">Religion</option>
		         		<option value="Male">christianity</option>
		         		<option value="Female">islam</option>
		         	</select>
		         </div>
		         <div class="form-group">
		         	<input type="text" name="country_of_origin" required class="form-control" placeholder="country of origin">
		         </div>
		         <div class="form-group">
		         	<input type="text" name="state_of_origin" required class="form-control" placeholder="state of origin">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="lga_of_origin" required class="form-control" placeholder="lga_of_origin">
		         </div>
						 <div class="form-group">
		         	<select name="gender" class="form-control">
		         		<option selected="" disabled="">Gender</option>
		         		<option value="Male">Male</option>
		         		<option value="Female">Female</option>
		         	</select>
		         </div>
						 <div class="form-group">
		         	<select name="residence_status" class="form-control">
		         		<option selected="" disabled="">residence status</option>
		         		<option value="Male">BIRTH</option>
		         		<option value="Female">NATURALIZATION</option>
								 <option value="Female">REGISTRATION</option>
		         	</select>
		         </div>
						 <div class="form-group">
		         	<input type="text" name="NIN" required class="form-control" placeholder="NIN">
		         </div>

						  <div class="form-group">
		         	<select name="marital_status" class="form-control">
		         		<option selected="" disabled="">marital status</option>
		         		<option value="Male">single</option>
		         		<option value="Female">married</option>
								 
		         	</select>
		         </div>
						 <div class="form-group">
		         	<input type="text" name="phone_number" required maxlength="11" class="form-control" placeholder="phone number">
		         </div>
						 <div class="form-group">
		         	<input type="email" name="email" required class="form-control" placeholder="Email">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="year_of_birth"  required maxlength="4" class="form-control" placeholder="year of birth">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="month_of_birth" required maxlength="2" class="form-control" placeholder="month of birth">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="day_of_birth" required maxlength="2" class="form-control" placeholder="day of birth">
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
if(isset($_POST["register"])&& isset($_POST['last_name']) && isset($_POST['first_name'])&& isset($_POST['year_of_birth'])) {
	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$othernames = $_POST['othernames'];
	$town_of_residence= $_POST['town_of_residence'];
	$country_of_residence = $_POST['country_of_residence'];
	$state_of_residence = $_POST['state_of_residence'];
	$lga_of_residence = $_POST['lga_of_residence'];
	$address_of_residence = $_POST['address_of_residence'];
	$religion = $_POST['religion'];
	$country_of_origin= $_POST['country_of_origin'];
	$state_of_origin = $_POST['state_of_origin'];
	$lga_of_origin = $_POST['lga_of_origin'];
	$gender = $_POST['gender'];
	$residence_status = $_POST['residence_status'];
	$NIN = $_POST['NIN'];
	$marital_status = $_POST['marital_status'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$year_of_birth = $_POST['year_of_birth'];
	$month_of_birth = $_POST['month_of_birth'];
	$day_of_birth = $_POST['day_of_birth'];


	include 'phpqrcode/index.php';
	//$filename=$PNG_TEMP_DIR."$phone_number.png";
	//$qr=QRcode::png($email, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
	//$reg_date =  date("j F Y. h:iA");
	//$password = $staff_num.'pw';
		        $sql = mysql_query("INSERT INTO  citizens(last_name,first_name,othernames,town_of_residence,country_of_residence,state_of_residence,lga_of_residence,address_of_residence,religion,country_of_origin,state_of_origin,lga_of_origin,gender,residence_status,NIN,marital_status,phone_number,email,year_of_birth,month_of_birth,day_of_birth,QRcode )VALUES('$last_name','$first_name','$othernames','$town_of_residence','$country_of_residence','$state_of_residence','$lga_of_residence','$address_of_residence','$religion','$country_of_origin','$state_of_origin','$lga_of_origin','$gender','$residence_status','$NIN','$marital_status','$phone_number','$email','$year_of_birth','$month_of_birth','$day_of_birth','$name.png')");
			        if ($sql) {
			        	echo "<script>alert('Citizen has been registered into the database!')</script>";
			        	echo "<script>window.open('voters.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
			    }
include 'inc/footer.php';
?>