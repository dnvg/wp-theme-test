<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="ico/favicon.png" />

	<title>Udemy Static Template</title>

	<?php wp_head(); ?>

</head>

<body>

<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand rippler" href="index.html">Udemy</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
            
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'container'		 => false,
				'menu_class'	 => 'nav navbar-nav'
			)) ?>


			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
</nav>