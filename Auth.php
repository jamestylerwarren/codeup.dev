<?php
require_once '../exercises/Log.php';
class Auth 
{	
	$username;
	public static $password;

	public function attempt($username, $password) {
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$passwordVerify = password_verify($password, $hashedPassword);

		if ($username === 'guest' && $password_verify) {
			$_SESSION['logged_in_user'] = $username;
			$log = new Log();
			$message = "User {$username} logged in";
			$log->logInfo($message);
		}

	}

	public function check() {

	}

	public function user() {

	}

	public function logout() {
		
	}

}