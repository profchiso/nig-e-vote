<?php
session_start();
if (isset($_SESSION['VIN'])) {
	header("Location: dashboard.php");
}
include '../admin/inc/config.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/coatofarms.jpg">
	<link rel="icon" type="image/png" href="../assets/img/coatofarms.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Nigeria E-Voting | Homepage</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/material-kit.css" rel="stylesheet"/>
	<style>
		li a:hover{
			color:red !important;
			font-weight:bolder;
		}
	</style>

</head>

<body class="landing-page">
    <nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#"><img src="../assets/img/coat_of_arms.jpg" class="img-circle img-responsive"/>  Nigeria <b>E_Voting</b></a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    			
					<li>
    					<a data-toggle="modal" data-target="#NINReg">
    						NIN Enrolment
    					</a>
					</li>
					
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('assets/img/ng_flag2.png');">
            <div class="container">
                <div class="row">
					<center><div class="col-md-12">
						<h3 class="title">ENROL IN NIN</h3>
	                    <br />
	                   
					</div></center>
                </div>
            </div>
        </div>

		
			      <?php
			      	if (isset($_POST['submit'])) {

						  $start_vote= date('H');
						  $end_vote=date('H');

						  $vote_period = mysql_query("SELECT * FROM citizens ");
						  $row = mysql_fetch_array($vote_period);
						  $start=$row['vote_starts'];
						  $end=$row['vote_ends'];

						  //working on database start time

						  //toAarry
						  $db_start_time_arr = explode(':',$start);

						  //split to Char
						  $db_start_hour = str_split($db_start_time_arr[0]);
						  $db_start_minute = str_split($db_start_time_arr[1]);

							//picking the usefull values
						  if($db_start_hour[0]>0){
							  $db_main_start_hour = $db_start_time_arr[0];
						  }else{
							 $db_main_start_hour = $db_start_hour[1];
						  }

						  if($db_start_minute[0]>0){
							  $db_main_start_minute = $db_start_time_arr[1];
						  }else{
							$db_main_start_minute = $db_start_minute[1]; 
						  }

						  //end of working on start time;


						  //working on database end time

						  //toAarry
						  $db_end_time_arr = explode(':',$end);

						  //split to Char
						  $db_end_hour = str_split($db_end_time_arr[0]);
						  $db_end_minute = str_split($db_end_time_arr[1]);

							//picking the usefull values
						  if($db_end_hour[0]>0){
							  $db_main_end_hour = $db_end_time_arr[0];
						  }else{
							 $db_main_end_hour = $db_end_hour[1];
						  }

						  if($db_end_minute[0]>0){
							  $db_main_end_minute = $db_end_time_arr[1];
						  }else{
							$db_main_end_minute = $db_end_minute[1]; 
						  }

						  //end of working on end time;

						  //working on current time hour
						  $current_time_hour= str_split(date('H'));

						  if($current_time_hour[0]>0){
							  $current_time_hour_main= date('H');
						  }else{
							$current_time_hour_main=  $current_time_hour[1]-1;
						  }

						   //working on current time minutes
						   $current_time_minute= str_split(date('i'));

						  if($current_time_minute[0]>0){
							  $current_time_minute_main= date('i');
						  }else{
							$current_time_minute_main =  $current_time_minute[1];
						  }


						  	//decision proper

						  if($current_time_hour_main >= $db_main_start_hour && $current_time_minute_main >= $db_main_start_minute  && $current_time_hour_main <= $db_main_end_hour && $current_time_minute_main <= $db_main_end_minute){
							$VIN = $_POST['VIN'];
							$otp = $_POST['otp'];

							$validate = mysql_query("SELECT * FROM citizens WHERE VIN='$VIN' AND otp ='$otp' AND voted = '0' AND  state_of_origin=voting_state");
//recent logic
									$vinOtpCheck = mysql_query("SELECT VIN,otp FROM citizens WHERE VIN=$vin AND otp=$otp");
									if(mysql_num_rows($vinOtpCheck)){
										$isValidVIN = $VIN;
										$isValidOtp = $otp;
											$checkVoted= mysql_query("SELECT * FROM citizens Where VIN='$isValidVIN' AND otp ='$isValidOtp' AND voted = '0'");
											if(mysql_num_rows($checkVoted)){

												$isEligibleToVote = mysql_query("SELECT * FROM citizens WHERE VIN='$VIN' AND otp ='$otp' AND voted = '0' AND  state_of_origin=voting_state");

												if(mysql_num_rows($isEligibleToVote)){
													$_SESSION['VIN'] = $VIN;
								          $_SESSION['otp'] = $otp;
								// $VinSubmit=mysql_query("INSERT INTO voters SET VIN = '$VIN'");
								          echo "<script>window.open('dashboard.php','_self')</script>";

												}else{
													echo "<script>alert('Sorry is not your State turn to vote yet check later')</script>";
												}


											
											}else{
												echo "<script>alert('duplicate  voting not allowed')</script>";

											}


									}else{
										echo "<script>alert('Incorrect Login Details ')</script>";
									}
						

//end of recent logic


							if (mysql_num_rows($validate)) {
								$_SESSION['VIN'] = $VIN;
								$_SESSION['otp'] = $otp;
								// $VinSubmit=mysql_query("INSERT INTO voters SET VIN = '$VIN'");
								echo "<script>window.open('dashboard.php','_self')</script>";

							}else{
								echo "<script>alert('Incorrect Login Details OR you have Voted before!')</script>";
							}

						  }else{
							echo "<script>alert('Please voting starts by  $start   and ends by $end  in 24hrs time count')</script>";
						  }
			      	}
			      ?>
			    </div>
			  </div>
			</div>

			<!-- Nin enrollment modal -->
			<div class="modal fade" id="NINReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>Enroll Citizen</center></h4>
      </div>

								

         <form method="post" action="#" enctype="multipart/form-data" autocomplete>
		      <div class="modal-body">
					<p class="alert alert-info text-center">All fields are Required</p>
		         <div class="form-group">
		         	<input type="text" name="last_name" required class="form-control" placeholder="Last Name">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="first_name" required class="form-control" placeholder="First Name">
		         </div>
						 <div class="form-group">
		         	<input type="text" name="othernames"  class="form-control" placeholder="Othernames">
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
		            <button name="enrol" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i>Enroll</button>
		      </div>
         </form>
    </div>
  </div>
  </div>
	<!-- enrollment script -->
	<?php
	if(isset($_POST["enrol"])&& isset($_POST['last_name']) && isset($_POST['first_name'])&& isset($_POST['year_of_birth'])) {
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

$currentYear = date('Y');

	include 'phpqrcode/index.php';
	if($currentYear - $year_of_birth < 18){

		        $sql = mysql_query("INSERT INTO  citizens(last_name,first_name,othernames,town_of_residence,country_of_residence,state_of_residence,lga_of_residence,address_of_residence,religion,country_of_origin,state_of_origin,lga_of_origin,gender,residence_status,NIN,marital_status,phone_number,email,year_of_birth,month_of_birth,day_of_birth,QRcode,otp )VALUES('$last_name','$first_name','$othernames','$town_of_residence','$country_of_residence','$state_of_residence','$lga_of_residence','$address_of_residence','$religion','$country_of_origin','$state_of_origin','$lga_of_origin','$gender','$residence_status','$NIN','$marital_status','$phone_number','$email','$year_of_birth','$month_of_birth','$day_of_birth','$name.png','$random')");
			        if ($sql) {
			        	echo "<script>alert('Citizen has been registered into the database!')</script>";
			        	echo "<script>window.open('index.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
					}else{
//age greater than 18

// to citizen table 
$sqlCitizen = mysql_query("INSERT INTO  citizens(last_name,first_name,othernames,town_of_residence,country_of_residence,state_of_residence,lga_of_residence,address_of_residence,religion,country_of_origin,state_of_origin,lga_of_origin,gender,residence_status,NIN,marital_status,phone_number,email,year_of_birth,month_of_birth,day_of_birth,QRcode,otp )VALUES('$last_name','$first_name','$othernames','$town_of_residence','$country_of_residence','$state_of_residence','$lga_of_residence','$address_of_residence','$religion','$country_of_origin','$state_of_origin','$lga_of_origin','$gender','$residence_status','$NIN','$marital_status','$phone_number','$email','$year_of_birth','$month_of_birth','$day_of_birth','$name.png','$random')");
//end of inserting into citizen table

// inserting same record into the voters table.
$sql = mysql_query("INSERT INTO  voters(last_name,first_name,othernames,town_of_residence,country_of_residence,state_of_residence,lga_of_residence,address_of_residence,religion,country_of_origin,state_of_origin,lga_of_origin,gender,residence_status,NIN,marital_status,phone_number,email,year_of_birth,month_of_birth,day_of_birth,QRcode,otp )VALUES('$last_name','$first_name','$othernames','$town_of_residence','$country_of_residence','$state_of_residence','$lga_of_residence','$address_of_residence','$religion','$country_of_origin','$state_of_origin','$lga_of_origin','$gender','$residence_status','$NIN','$marital_status','$phone_number','$email','$year_of_birth','$month_of_birth','$day_of_birth','$name.png','$random')");

//if all insertion went well
			        if ($sql) {
			        	echo "<script>alert('REGISTRATION SUCCESSFUL!')</script>";
			        	echo "<script>window.open('index.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
					}
				}

?>
	<!-- end of enrollment script -->

			<!-- end of nin enrolment Modal -->


			<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" align="center" id="myModalLabel">About the developer</h4>
			      </div>
				      <div class="modal-body">
				        <div class="row">
				        	<div class="col-md-5">
				        		<img src="assets/img/coatofarms.jpg" class="img-responsive" width="200" height="200">
				        	</div>
				        	<div class="col-md-7">
				        		<p><b>Name:</b> Edit to your name<br>
				        		<b>Reg. Number</b> enter Your Regno<br>
				        		<b>Project Topic</b> Nigeria E-voting<br>
				        		<b>Project Supervisor</b> Enter your supervisor name<br>
				        		</p>
				        	</div>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
				      </div>
			    </div>
			  </div>
			</div>

			
	    <footer class="footer">
	        <div class="container">
	            <div class="copyright pull-center">
	                &copy;<b id="y"></b>.  <a href="#">Nigeria E_Voting</a>
	            </div>
	        </div>
	    </footer>

	</div>
</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js" type="text/javascript"></script>
	<script src="../assets/js/my-script.js"></script>

</html>
