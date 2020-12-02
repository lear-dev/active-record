<?php
session_start();
require_once 'config.php';
if(!empty($_SESSION["userId"])) {
	//already registered message and no form
	if ($usetwig=="true") {
		echo $twig->render('already-registered.html.twig');
	} else {
		require_once './view/already-registered.php';
	}
} else {
	//show form
	if ($usetwig=="true") {
		echo $twig->render('register-form.html.twig');
	} else {
		require_once './view/register-form.php';
	}
	unset($_SESSION["displayname"]);
	unset($_SESSION["username"]);
	unset($_SESSION["password"]);
	unset($_SESSION["emailaddress"]);
	unset($_SESSION["errorMessage"]);
}
?>