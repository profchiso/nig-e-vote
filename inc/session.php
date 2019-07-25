<?php
session_start();
if (!isset($_SESSION['VIN'])) {
	header("Location: voters.php");
}
?>