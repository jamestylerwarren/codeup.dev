<?php
session_start();
require_once '../Auth.php';
require_once '../Input.php';

function clearSession()
{
    Auth::logout();
    header('Location: http://codeup.dev/login.php');
	exit();
}
clearSession();


?>
<html>
<head>
	<title>Logout</title>
</head>
<body>

</body>
</html>