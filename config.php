<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

ActiveRecord\Config::initialize(function($cfg){
	$cfg->set_model_directory('models');
	$cfg->set_connections(array(
	'development' => 'mysql://arguy:arguy@localhost/database_name'));
});

if (!empty($_SESSION["userId"])) {
	$user = User::find_by_id($_SESSION["userId"]);
	
	#example crud
	
	# create
	#$user = User::create(array('name' => 'Person', 'state' => 'VA'));

	# read
	#$user = User::find_by_name('Person Jr');
	#$user = User::find_by_id($_SESSION["userId"]);
	#echo $user->name;

	# update
	#$user->name = 'Person Jr';
	#$user->save();

	# delete
	#$user->delete();
	
	# time based logout
	#if((time() - $user->last_active_timestamp) > 60) //logout if more than x amount of seconds inactive
	if((time() - $user->last_login_timestamp) > 3600) //logout if more than x amount of seconds since logged in
	{
		header("location:logout.php");
	}
	else {
		$user->last_active_timestamp = time();
		$user->last_active_datetime = date('Y-m-d H:i:s');
		$user->save(); //update when last active
	}
}

$debug_troubleshooting = "false"; #see debug and troubleshooting things - true or false
$usetwig = "true"; #use twig templating system - true or false
$mail = new PHPMailer\PHPMailer\PHPMailer();

$baseurl = "http://localhost/activerecord-test/";
$favicon_location = "./view/img/phpar-256.png";
$jquery_location = "./vendor/components/jquery/jquery.min.js";
$bootstrap_css_location = "./vendor/twbs/bootstrap/dist/css/bootstrap.min.css";
$bootstrap_js_location = "./vendor/twbs/bootstrap/dist/js/bootstrap.min.js";

if ($usetwig=="true") {
	$loader = new FilesystemLoader(__DIR__ . '/view'); //location of twig template files
	$twig = new Environment($loader);
	
	$twig->addGlobal('debug_troubleshooting', $debug_troubleshooting);

	$twig->addGlobal('baseurl', $baseurl);
	$twig->addGlobal('favicon_location', $favicon_location);
	$twig->addGlobal('jquery_location', $jquery_location);
	$twig->addGlobal('bootstrap_css_location', $bootstrap_css_location);
	$twig->addGlobal('bootstrap_js_location', $bootstrap_js_location);

	$twig->addGlobal('id', $user->id);
	$twig->addGlobal('user_name', $user->user_name);
	$twig->addGlobal('display_name', $user->display_name);
	$twig->addGlobal('email', $user->email);

	$twig->addGlobal('userId', $_SESSION["userId"]);
	$twig->addGlobal('userName', $_SESSION["userName"]);
	$twig->addGlobal('userDisplayname', $_SESSION["userDisplayname"]);
	$twig->addGlobal('userEmail', $_SESSION["userEmail"]);
	$twig->addGlobal('username', $_SESSION["username"]);
	$twig->addGlobal('password', $_SESSION["password"]);
	$twig->addGlobal('displayname', $_SESSION['displayname']);
	$twig->addGlobal('emailaddress', $_SESSION['emailaddress']);
	$twig->addGlobal('loginsuccessonce', $_SESSION["loginsuccessonce"]);
	$twig->addGlobal('errorMessage', $_SESSION["errorMessage"]);
	$twig->addGlobal('successMessage', $_SESSION["successMessage"]);
}
?>