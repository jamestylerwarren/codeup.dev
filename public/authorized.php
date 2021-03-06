<?php
session_start();

require_once 'functions.php';
require_once '../Auth.php';
require_once '../Input.php';

function pagecontroller() {
	if (!isset($_SESSION['logged_in_user'])) {
		header('Location: http://codeup.dev/login.php');
		exit();
	}
	$data['username'] = escape($_SESSION['logged_in_user']);
	return $data;
}
extract(pagecontroller());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<title>Authorized</title>
	<style>
	.fullscreen_bg {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-size: cover;
		background-position: 50% 50%;
		background-image: url('img/mez4hEM.gif');
		background-repeat:repeat;
	}
	.header {
		color: white;
	}
	</style>

</head>
<body>
	
	

	<div id="fullscreen_bg" class="fullscreen_bg"/>
		<h1 class="header">Welcome <?= $username ?></h1>
		<form action='logout.php'>
			<input type="submit" value="Logout">
		</form>
	</div>


	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>
</html>

