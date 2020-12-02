<?php
session_start();
require_once "config.php";
if(!empty($_SESSION["userId"])) {
	if ($usetwig=="true") {
		echo $twig->render('dashboard.html.twig');
	} else {
		require_once './view/dashboard.php';
	}
	unset($_SESSION["loginsuccessonce"]);
} else {
    if ($usetwig=="true") {
		echo $twig->render('login-form.html.twig');
	} else {
		require_once './view/login-form.php';
	}
	unset($_SESSION["username"]);
	unset($_SESSION["password"]);
	unset($_SESSION["errorMessage"]);
	unset($_SESSION["successMessage"]);
}
?>