<?php
session_start();
require_once "config.php";
if(!isset($_SESSION['userId']) || empty($_SESSION["userId"])){
	header("Location: ./");
}
if ($usetwig=="true") {
	echo $twig->render('features.html.twig');
} else {
	require_once './view/features.php';
}
?>