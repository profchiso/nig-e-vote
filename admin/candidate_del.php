<?php
include 'inc/session.php';
include 'inc/config.php';
$id = $_GET['id'];
$sql = mysql_query("DELETE FROM candidate WHERE id = '$id'");
if ($sql) {
	echo "<script>alert('Account Deleted')</script>";
	echo "<script>window.open('candidates.php','_self')</script>";
}else{
	echo "<script>alert('Error Deleting Account')</script>";
	echo "<script>window.open('candidates.php','_self')</script>";
}
?>