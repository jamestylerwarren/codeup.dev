<?php
require_once '../exercises/Log.php';
class Auth 
{	
	public $username = 'guest';
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public function attempt($username, $password) {
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

	public function check() {

	}

	public function user() {

	}

	public function logout() {
		
	}

}