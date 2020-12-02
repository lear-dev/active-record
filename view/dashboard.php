<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<base href="<?php echo $baseurl; ?>">
	<link rel="icon" type="image/png" href="<?php echo $favicon_location; ?>">
	<link rel="stylesheet" href="<?php echo $bootstrap_css_location; ?>">
	<link rel="stylesheet" href="./view/css/style.css" type="text/css">
</head>
<body>
	<?php require_once './view/navbar.php'; ?>
	<div class="container">
		<div class="mt-4 col-md-12"></div>
		<?php if(!empty($_SESSION["loginsuccessonce"])) { ?>
		<div class="alert alert-success alert-login alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			You have successfully logged in!
		</div>
		<?php } ?>
		
		<h1>Home</h1>
		<p>home info...</p>
	</div>
	<script src="<?php echo $jquery_location; ?>"></script>
	<script src="<?php echo $bootstrap_js_location; ?>"></script>
	<script type="text/javascript">
    $(document).ready(function() {
		$('.alert-login').delay(4000).slideUp();
	});
	</script>
	<?php if ($debug_troubleshooting == "true") { ?>
	<div style="position:absolute;bottom:0;left:0;">p</div>
	<?php } ?>
</body>
</html>