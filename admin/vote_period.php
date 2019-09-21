<?php
include 'inc/header.php';
include 'inc/sidebar.php';
$fetch = mysql_query("SELECT * FROM citizens LIMIT 1");
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> INEC Voting Period Portal</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Set Voting time and voting state</h3>
					<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#candidateReg"><i class="fa fa-plus"></i>Set Time</a>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
							<th>Voting Starts</th>
							<th>Voting Ends</th>
							<th>Voting State</th>
						</thead>
						<tbody>
							<?php
							while ($row = mysql_fetch_array($fetch)) {
							?>
							<tr>
								<td><?php echo $row['vote_starts']?></td>
								<td><?php echo $row['vote_ends']?></td>
								<td><?php echo $row['voting_state']?></td>
							
							</tr>
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
        <h4 class="modal-title" id="myModalLabel"><center>Set Voting Period</center></h4>
      </div>
         <form method="post" action="#" enctype="multipart/form-data">
		      <div class="modal-body">
		         <div class="form-group">
				 					<label for="start_time">Start Time</label>
		         			<input type="time" name="start_time" class="form-control" required>
		         </div>
				 		<div class="form-group">
				 					<label for="end_time" >End Time</label>
		         			<input type="time" name="end_time" class="form-control"  required >
		         </div>
						 <div class="form-group">
				 					<label for="end_time" >Voting State</label>
		         			<input type="text" name="voting_state" class="form-control"  required >
		         </div>
			
		      </div>
		      <div class="modal-footer">
		            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancel</button>
		            <button name="register" class="btn btn-success btn-simple"><i class="fa fa-check-square"></i> SET</button>
		      </div>
         </form>
    </div>
  </div>
  </div>
<?php
if(isset($_POST["register"]) && isset($_POST['start_time']) && isset($_POST['end_time']) && isset($_POST['voting_state'])) {
	$start_time = $_POST['start_time'];
	$end_time= $_POST['end_time'];
	$voting_state =$_POST['voting_state'];
						$sql = mysql_query("UPDATE citizens SET vote_starts='$start_time', vote_ends='$end_time',voting_state='$voting_state'");
						
			        if ($sql) {
			        	echo "<script>alert('Voting Time and state Set!')</script>";
			        	echo "<script>window.open('vote_period.php','_self')</script>";
			        }else{
			        	echo '<span class="alert alert-danger">'.mysql_error().'Please try again!</span>';
			        }
			    }
include 'inc/footer.php';
?>