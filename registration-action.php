<?php
require_once 'config.php';
if (!empty($_POST["register"])) {
	session_start();
	$username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
	$displayname = filter_var($_POST["display_name"], FILTER_SANITIZE_STRING);
	$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
	$emailaddress = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
	require_once (__DIR__ . "./models/User.php");
	$user = new User();
	$isRegistered = $user->processRegistration($username, $displayname, $password, $emailaddress);
	$_SESSION["errorMessage"] = "";
	$_SESSION["successMessage"] = "";
	if ($displayname==""){
		$_SESSION["errorMessage"] .= "Full Name Required.<br>";
	}
	if ($username==""){
		$_SESSION["errorMessage"] .= "Username Required.<br>";
	} else {
		$usercheck = User::find('first',array('conditions' => array('user_name=?',$username)));
		if(!empty($usercheck)){
			$_SESSION["errorMessage"] .= "Username Taken. Try Again.<br>";
		}
	}
	if ($password==""){
		$_SESSION["errorMessage"] .= "Password Required.<br>";
	}
	if ($emailaddress==""){
		$_SESSION["errorMessage"] .= "Email Address Required.<br>";
	} else {
		if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
			$_SESSION["errorMessage"] .= "Invalid Email Address.<br>";
		} else {
			$emailcheck = User::find('first',array('conditions' => array('email=?',$emailaddress)));
			if(!empty($emailcheck)){
				$_SESSION["errorMessage"] .= "Email Address Taken. Try Again.<br>";
			}
		}
	}
	if (! $isRegistered) {
		header("Location: ./register.php");
	} else {
		unset($_SESSION["errorMessage"]);
		unset($_SESSION["displayname"]);
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
		unset($_SESSION["emailaddress"]);
		$_SESSION["successMessage"] .= "Success, you can now login.";
		header("Location: ./");
	}
	exit();
}