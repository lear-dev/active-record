<?php
session_start();
require_once "config.php";
if(!isset($_SESSION['userId']) || empty($_SESSION["userId"])){
	header("Location: ./");
}
if ($usetwig=="true") {
	#echo $twig->render('profile.html.twig', ['display_name' => $user->display_name, 'user_name' => $user->user_name, 'email' => $user->email, 'favicon_location' => $favicon_location, 'bootstrap_css_location' => $bootstrap_css_location, 'jquery_location' => $jquery_location, 'bootstrap_js_location' => $bootstrap_js_location]);
	echo $twig->render('profile.html.twig');
} else {
	require_once './view/profile.php';
}
?>