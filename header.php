<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/eloesports/wp-content/themes/eloesports/js/app.js"></script>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url);?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
<header class="main-header">
	<div class="header-left">
		
	</div>
	<div class="wrap-header">
		<div class="logo">
			<figure>
				<img src="" alt="">
			</figure>
			<p class="logo-title">ELOESPORTS</p>
			<canvas>
			
			</canvas>
		</div>
		<?php include TEMPLATEPATH . '/templates/nav.php' ?>
	
		<div class="social">
		
		</div>
	</div>
</header>