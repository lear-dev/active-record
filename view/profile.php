<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<base href="<?php echo $baseurl; ?>">
	<link rel="icon" type="image/png" href="<?php echo $favicon_location; ?>">
	<link rel="stylesheet" href="<?php echo $bootstrap_css_location; ?>">
	<link rel="stylesheet" href="./view/css/style.css" type="text/css">
</head>
<body>
	<?php require_once './view/navbar.php'; ?>
	<div class="container">
		<div class="mt-4 col-md-12"></div>
		<div class="card card-body bg-light">
			<h1><?php echo $user->display_name; ?></h1>
			<div class="mt-4 col-md-12"></div>
			<p><b>Username:</b> <?php echo $user->user_name; ?></p>
			<p><b>Email:</b> <?php echo $user->email; ?></p>
		</div>
	</div>
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