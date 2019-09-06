<?php
include 'inc/header.php';
include 'inc/sidebar.php';
//$fetch = mysql_query("SELECT * FROM admin");
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> INEC SESSION END DATA CLEARING PAGE</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>DELETE A VOTING SESSION</h3>
					<!-- <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#candidateReg"><i class="fa fa-plus"></i>Set Time</a> -->
					<form action="#" method="post">
						<button class="btn btn-warning btn-danger" name="clear">Clear Results</button>
						<button class="btn btn-warning btn-danger" name="clear_candidate">Clear Contestants</button>
						<div><em style="color:red">This actions are critical!!!</em></div>
					</form>
				</div>
			
				
<?php
// clear the votes
				if(isset($_POST["clear"])) {
	
		        $sql = mysql_query("DELETE  FROM votes");
			        if ($sql) {
			        	echo "<script>alert('Voting REsults Cleared!!!')</script>";
			        	echo "<script>window.open('delete_voting_section.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
					}
		//clear candidates
		if(isset($_POST["clear_candidate"])) {
	
			$sql = mysql_query("DELETE  FROM candidate");
				if ($sql) {
					echo "<script>alert('Registered contestants cleared!!!')</script>";
					echo "<script>window.open('delete_voting_section.php','_self')</script>";
				}else{
					echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
				}
		}			


include 'inc/footer.php';
?>