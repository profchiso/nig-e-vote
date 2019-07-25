<?php
include '../inc/config.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/coatofarms.jpg">
	<link rel="icon" type="image/png" href="../assets/img/coatofarms.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Nigeria E-Voting | Validation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/material-kit.css" rel="stylesheet"/>
	

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
        		<a class="navbar-brand" href="#"><img src="../assets/img/coat_of_arms.jpg" class="img-circle img-responsive"/>  INEC <b>E-Validation Page</b></a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    			
    				
    				
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('../img/inec.jpg');">
            <div class="container">
                <div class="row">
					<center><div class="col-md-12">
						<h3 class="title">Validate you account</h3>
	                    <br />
	                    <a data-toggle="modal" data-target="#loginModal" class="btn btn-success btn-raised btn-lg">lets go</a>
					</div></center>
                </div>
            </div>
        </div>

			<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" align="center" id="myModalLabel">validate your VIN and create password<p><b>Note: use the email address you used in recieving this message as your email</b></p></h4>
			      </div>
			      <form method="post" action="#">
				      <div class="modal-body">
				        <div class="form-group">
				        	<div class="form-group label-floating">
								<label class="control-label">Email</label>
								<input type="email" name="email" class="form-control">
							</div>
				        </div>
                        <div class="form-group">
				        	<div class="form-group label-floating">
								<label class="control-label">Vin</label>
								<input type="text" name="vin" class="form-control">
							</div>
				        </div>
                        
				        <div class="form-group">
				        	<div class="form-group label-floating">
								<label class="control-label"> Create your voting password</label>
								<input type="password" name="password" class="form-control">
							</div>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
				        <button name="submit" type="submit" class="btn btn-info btn-simple">Validate</button>
				      </div>
			      </form>
			      <?php
			      	if (isset($_POST['submit'])) {
			      		$email = $_POST['email'];
						  $vin = $_POST['vin'];
						  $password = $_POST['password'];
						  $date_of_validation=date("d/m/y");
			      		$validate = mysql_query("UPDATE citizens SET email='$email',VIN=$vin,password='$password',date_of_validation='$date_of_validation' WHERE email='$email'");
			      		if ($validate) {
							 
						   echo "<script>alert('validation successful, visit localhost/nigeria-e-voting to cast your vote');</script>";
			      			echo "<script>window.open('../index.php','_self')</script>";
			      		}else{
			      			echo "<script>alert('Validation Unsuccessful check if you enterd the correct emial')</script>";
			      		
			      		}
			      	}
			      ?>
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
