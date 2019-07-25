<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header text-center alert alert-success">Collation  | Dashboard</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">	
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Presidential Results</h3>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
							<th>Candidate's Fullname</th>
							<th>passport</th>
							<th>Party</th>
							<th>party Logo</th>
							<th>Votes</th>
						</thead>
						<tbody>
							<?php
							$president = mysql_query("SELECT * FROM candidate WHERE post = 'President'");
								while ($row_president = mysql_fetch_array($president)) {
							?>
							<tr>
								<td><?php echo $row_president['fullname']?></td>
								<td><img src="uploads/<?php echo $row_president['passport']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<td><?php echo $row_president['party']?></td>
								<td><img src="party_logos/<?php echo $row_president['party_logo']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<?php
								$fullname = $row_president['fullname'];
									$votes = mysql_query("SELECT * FROM votes WHERE president = '$fullname'");
									$tot_num_president_votes = mysql_num_rows($votes);
								?>
								<td><?php echo $tot_num_president_votes ?></td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Senetorial Results</h3>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
						<th>Candidate's Fullname</th>
							<th>passport</th>
							<th>Party</th>
							<th>party Logo</th>
							<th>Votes</th>
						</thead>
						<tbody>
							<?php
							$senate = mysql_query("SELECT * FROM candidate WHERE post = 'Senate'");
								while ($row_senate = mysql_fetch_array($senate)) {
							?>
							<tr>
							<td><?php echo $row_senate['fullname']?></td>
								<td><img src="uploads/<?php echo $row_senate['passport']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<td><?php echo $row_senate['party']?></td>
								<td><img src="party_logos/<?php echo $row_senate['party_logo']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<?php
								$fullname = $row_senate['fullname'];
									$votes = mysql_query("SELECT * FROM votes WHERE senate = '$fullname'");
									$tot_num_senate_votes = mysql_num_rows($votes);
								?>
								<td><?php echo $tot_num_senate_votes ?></td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>


		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>House Of Rep  Results</h3>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
						<th>Candidate's Fullname</th>
							<th>passport</th>
							<th>Party</th>
							<th>party Logo</th>
							<th>Votes</th>
						</thead>
						<tbody>
							<?php
							$HouseOfRep = mysql_query("SELECT * FROM candidate WHERE post = 'HouseOfRep'");
								while ($row_HouseOfRep = mysql_fetch_array($HouseOfRep)) {
							?>
							<tr>
								<td><?php echo $row_HouseOfRep['fullname']?></td>
								<td><img src="uploads/<?php echo $row_HouseOfRep['passport']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<td><?php echo $row_HouseOfRep['party']?></td>
								<td><img src="party_logos/<?php echo $row_HouseOfRep['party_logo']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<?php
								$fullname = $row_HouseOfRep['fullname'];
									$votes = mysql_query("SELECT * FROM votes WHERE HouseOfRep = '$fullname'");
									$tot_num_HouseOfRep_votes = mysql_num_rows($votes);
								?>
								<td><?php echo $tot_num_HouseOfRep_votes ?></td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>



		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Governorship  Results</h3>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
						<th>Candidate's Fullname</th>
							<th>passport</th>
							<th>Party</th>
							<th>party Logo</th>
							<th>Votes</th>
						</thead>
						<tbody>
							<?php
							$Governors = mysql_query("SELECT * FROM candidate WHERE post = 'Governors'");
								while ($row_Governors = mysql_fetch_array($Governors)) {
							?>
							<tr>
								<td><?php echo $row_Governors['fullname']?></td>
								<td><img src="uploads/<?php echo $row_Governors['passport']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<td><?php echo $row_Governors['party']?></td>
								<td><img src="party_logos/<?php echo $row_Governors['party_logo']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<?php
								$fullname = $row_Governors['fullname'];
									$votes = mysql_query("SELECT * FROM votes WHERE Governors = '$fullname'");
									$tot_num_Governors_votes = mysql_num_rows($votes);
								?>
								<td><?php echo $tot_num_Governors_votes ?></td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>House Ass  Results</h3>
				</div>
				<div class="panel-body table-responsive">
					<table class="table table-striped">
						<thead>
						<th>Candidate's Fullname</th>
							<th>passport</th>
							<th>Party</th>
							<th>party Logo</th>
							<th>Votes</th>
						</thead>
						<tbody>
							<?php
							$HouseOfAss = mysql_query("SELECT * FROM candidate WHERE post = 'HouseOfAss'");
								while ($row_HouseOfAss = mysql_fetch_array($HouseOfAss)) {
							?>
							<tr>
								<td><?php echo $row_HouseOfAss['fullname']?></td>
								<td><img src="uploads/<?php echo $row_HouseOfAss['passport']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<td><?php echo $row_HouseOfAss['party']?></td>
								<td><img src="party_logos/<?php echo $row_HouseOfAss['party_logo']?>" class="img-responsive img-circle" width="45" height="45"></td>
								<?php
								$fullname = $row_HouseOfAss['fullname'];
									$votes = mysql_query("SELECT * FROM votes WHERE HouseOfAss = '$fullname'");
									$tot_num_HouseOfAss_votes = mysql_num_rows($votes);
								?>
								<td><?php echo $tot_num_HouseOfAss_votes ?></td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
  <?php
include 'inc/footer.php';
?>