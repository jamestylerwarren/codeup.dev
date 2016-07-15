<?php
function pagecontroller(){
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	if ($username === 'guest' && $password === 'password') {
		header('Location: http://codeup.dev/authorized.php');
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
</head>
<body>
	<h1>Please enter login info</h1>
	<!-- <p><?= $message ?></p> -->
	<form method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit">
    </form>
</body>
</html>