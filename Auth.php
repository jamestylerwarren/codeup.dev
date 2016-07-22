<?php
require_once 'Log.php';
class Auth 
{	
	public static $username = 'guest';
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($username, $password) {
		$passwordVerify = password_verify($password, self::$password);

		if ($username === self::$username && $passwordVerify) {
			$_SESSION['logged_in_user'] = $username;
			$_SESSION['welcome'] = $welcome;
			$log = new Log();
			$message = "User {$username} logged in";
			$log->logInfo($message);
			return true;	
		}
		
		return false;
	}

	public static function check() {
		if (isset($_SESSION['logged_in_user'])) {
			return true;
		}

		return false;
	}

	public static function user() {
		if (isset($_SESSION['logged_in_user'])) {
			return ($_SESSION['logged_in_user']);
		}
	}

	public static function logout() {
		// clear $_SESSION array
	    session_unset();

	    // delete session data on the server and send the client a new cookie
	    session_regenerate_id(true);
	}

}