<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<div id="page-wrapper">
	<div class="row">
		<!-- Page Header -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-header"> INEC | Dashboard</h1>
		</div>
		<!-- Page Header -->
	</div>
	<div class="row">
		<!-- Welcome -->
			<div class="col-md-12">
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="fa fa-thumbs-up"></i> Welcome back <b>Administrator!</b>
				</div>
			</div>
		<!-- Welcome -->
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="alert alert-info">
				<i class="fa fa-users fa-3x"></i> <b>voters</b>
			</div>
		</div>
		<div class="col-md-3">
			<div class="alert alert-success">
				<i class="fa fa-user fa-3x"></i>  <b>candidates</b>
			</div>
		</div>
		<div class="col-md-3">
			<div class="alert alert-danger">
				<i class="fa fa-envelope fa-3x"></i>  <b>Messages</b>
			</div>
		</div>
		<div class="col-md-3">
			<div class="alert alert-success">
				<i class="fa fa-tag fa-3x"></i> <b>notifications</b>
			</div>
		</div>
	</div>
<?php
include 'inc/footer.php';
?>