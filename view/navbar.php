<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="./">PHP ActiveRecord</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="./">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./features.php">Features</a>
			</li>
		</ul>
		<span class="navbar-text">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php if (! empty($_SESSION["userId"])) { echo $user->display_name; } ?>
				</a>
				<div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="./profile.php">Profile</a>
					<a class="dropdown-item" href="./logout.php">Logout</a>
				</div>
			</li>
			</ul>
		</span>
	</div>
</nav>