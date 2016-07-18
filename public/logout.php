<?php
session_start();
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
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