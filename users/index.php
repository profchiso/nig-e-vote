<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> Users | Dashboard</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">
		<!-- Welcome -->
			<div class="col-md-12">
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="fa fa-thumbs-up"></i> Welcome <b>User!</b>
				</div>
			</div>
		<!-- Welcome -->
	</div>
	<div class="row">
		
		<div class="col-md-6">
			<div class="alert alert-danger">
				<i class="fa fa-envelope fa-3x"></i> 0 <b>Messages</b>
			</div>
		</div>
		<div class="col-md-6">
			<div class="alert alert-success">
				<i class="fa fa-tag fa-3x"></i> 0 <b>notifications</b>
			</div>
		</div>
	</div>
<?php
include 'inc/footer.php';
?>