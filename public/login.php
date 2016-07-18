<?php



function pagecontroller(){
	session_start();
	$username = isset($_POST['username']) ? $_POST['username'] : ''; //checks if username is present or not
	$password = isset($_POST['password']) ? $_POST['password'] : ''; //checks if pw is present
	if (isset($_SESSION['logged_in_user'])) {                       //if there is a session key, redirect to auth page
		header('Location: http://codeup.dev/authorized.php');
		exit();
	}
	if ($username === 'guest' && $password === 'password') {
		$_SESSION['logged_in_user'] = $username;
		header('Location: http://codeup.dev/authorized.php'); //direct to auth page when guest and password are entered
		exit();
	} else {
		$message = 'Invalid login. Please try again';
	}
	return ['message' => $message];
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




	<title>Login Page</title>

	<style>
		body {
			padding-top: 120px;
			padding-bottom: 40px;
			background-color: #eee;
		  
		}
		.btn {
			outline:0;
			border:none;
			border-top:none;
			border-bottom:none;
			border-left:none;
			border-right:none;
			box-shadow:inset 2px -3px rgba(0,0,0,0.15);
		}
		.btn:focus{
			outline:0;
			-webkit-outline:0;
			-moz-outline:0;
		}
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
		.form-signin {
			max-width: 280px;
			padding: 15px;
			margin: 0 auto;
			  margin-top:50px;
		}
		.form-signin .form-signin-heading, .form-signin {
			margin-bottom: 10px;
		}
		.form-signin .form-control {
			position: relative;
			font-size: 16px;
			height: auto;
			padding: 10px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		.form-signin input[type="text"] {
			margin-bottom: -1px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
			border-top-style: solid;
			border-right-style: solid;
			border-bottom-style: none;
			border-left-style: solid;
			border-color: #000;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
			border-top-style: none;
			border-right-style: solid;
			border-bottom-style: solid;
			border-left-style: solid;
			border-color: rgb(0,0,0);
			border-top:1px solid rgba(0,0,0,0.08);
		}
		.form-signin-heading {
			color: #fff;
			text-align: center;
			text-shadow: 0 2px 2px rgba(0,0,0,0.5);
		}


	</style>
</head>
<body>

	<div id="fullscreen_bg" class="fullscreen_bg"/>
		<div class="container">
			<form class="form-signin" method="POST">
				<h1 class="form-signin-heading text-muted">Welcome</h1>
				<input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
				<input type="password" name="password" class="form-control" placeholder="Password" required="">
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
			</form>
		</div>
	</div>



	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>
</html>