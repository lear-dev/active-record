<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<base href="<?php echo $baseurl; ?>">
	<link rel="icon" type="image/png" href="<?php echo $favicon_location; ?>">
	<link rel="stylesheet" href="<?php echo $bootstrap_css_location; ?>">
	<link rel="stylesheet" href="./view/css/form.css">
	<link rel="stylesheet" href="./view/css/style.css" type="text/css">
</head>
<body class="text-center">
	<form class="form-signin" action="login-action.php" method="post" id="frmLogin">
		<img class="mb-4" src="<?php echo $favicon_location; ?>" alt="" width="128" height="128">
		<h1 class="h3 mb-3 font-weight-normal">Login</h1>
		<?php if(isset($_SESSION["errorMessage"])) { ?>
		<div class="alert alert-danger"><?php echo $_SESSION["errorMessage"]; ?></div>
		<?php unset($_SESSION["errorMessage"]); } ?>
		<?php if(isset($_SESSION["successMessage"]) && !empty($_SESSION["successMessage"]) ) { ?>
		<div class="alert alert-success"><?php echo $_SESSION["successMessage"]; ?></div>
		<?php unset($_SESSION["successMessage"]); } ?>
		<label for="username" class="sr-only">Username</label><span id="user_info" class="error-info"></span>
		<input type="text" name="user_name" id="user_name" class="form-control loginpage" placeholder="Username" required value="<?php echo $_SESSION['username']; ?>">
		<label for="password" class="sr-only">Password</label><span id="password_info" class="error-info"></span>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="new-password" value="<?php echo $_SESSION['password']; ?>">
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">
		<p class="mt-5 mb-3 text-muted"><a href="register.php">register</a></p>
	</form>
	<script src="<?php echo $jquery_location; ?>"></script>
	<script src="<?php echo $bootstrap_js_location; ?>"></script>
	<script type="text/javascript">
    $(document).ready(function() {
		//do something
	});
	</script>
	<?php if ($debug_troubleshooting == "true") { ?>
	<div style="position:absolute;bottom:0;left:0;">p</div>
	<?php } ?>
</body>
</html>