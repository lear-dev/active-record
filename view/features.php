<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Features</title>
	<base href="<?php echo $baseurl; ?>">
	<link rel="icon" type="image/png" href="<?php echo $favicon_location; ?>">
	<link rel="stylesheet" href="<?php echo $bootstrap_css_location; ?>">
	<link rel="stylesheet" href="./view/css/style.css" type="text/css">
</head>
<body>
	<?php require_once './view/navbar.php'; ?>
	<div class="container">
		<div class="mt-4 col-md-12"></div>
		<h1>Features</h1>
		<ul class="list-group">
			<li class="list-group-item">Registration</li>
			<li class="list-group-item">Login</li>
			<li class="list-group-item">PHP ActiveRecord Database Usage</li>
			<li class="list-group-item">Jquery</li>
			<li class="list-group-item">Bootstrap</li>
			<li class="list-group-item">Twig PHP Templates</li>
		</ul>
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