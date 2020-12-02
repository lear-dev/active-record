<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<base href="<?php echo $baseurl; ?>">
	<link rel="icon" type="image/png" href="<?php echo $favicon_location; ?>">
	<link rel="stylesheet" href="<?php echo $bootstrap_css_location; ?>">
	<link rel="stylesheet" href="./view/css/form.css">
	<link rel="stylesheet" href="./view/css/style.css" type="text/css">
</head>
<body class="text-center">
	<form class="form-signin" action="registration-action.php" method="post" id="frmRegistration">
		<img class="mb-4" src="<?php echo $favicon_location; ?>" alt="" width="128" height="128">
		<h1 class="h3 mb-3 font-weight-normal">Registration</h1>
		<?php if(isset($_SESSION["errorMessage"]) && !empty($_SESSION["errorMessage"]) ) { ?>
		<div class="alert alert-danger"><?php echo $_SESSION["errorMessage"]; ?></div>
		<?php unset($_SESSION["errorMessage"]); } ?>
		<label for="displayname" class="sr-only">Full Name</label><span id="full_info" class="error-info"></span>
		<input type="text" name="display_name" id="display_name" class="form-control" placeholder="Full Name" required value="<?php echo $_SESSION['displayname']; ?>">
		
		<label for="emailaddress" class="sr-only">Email Address</label><span id="email_info" class="error-info"></span>
		<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required value="<?php echo $_SESSION['emailaddress']; ?>">
		
		<label for="username" class="sr-only">Username</label><span id="user_info" class="error-info"></span>
		<input type="text" name="user_name" id="user_name" class="form-control registerpage" placeholder="Username" required value="<?php echo $_SESSION['username']; ?>">
		
		<label for="password" class="sr-only">Password</label><span id="password_info" class="error-info"></span>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" required value="<?php echo $_SESSION['password']; ?>" autocomplete="new-password">
		
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register">
		<p class="mt-5 mb-3 text-muted"><a href="./">login</a></p>
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