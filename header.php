<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/eloesports/wp-content/themes/eloesports/js/app.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800|PT+Sans+Narrow:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:100,200,300,400,500,600,700,800|Fira+Sans+Extra+Condensed:300,400,500,600,700,800,900|Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url);?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
<header class="main-header">
	<div class="header-left">
		<span class="menu-icon icon-menu"></span>
	</div>
	<div class="wrap-header">
		<div class="logo">
			<a href="<?php get_home_url(); ?>">
			<figure>
				<?php if(function_exists('the_custom_logo')){
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
					if (has_custom_logo()) {
						echo '<img src="'.esc_url($logo[0]).'">';
					} else {
						echo 'NO LOGO';
					}
					} 
				?>
				<!-- <img src="" alt=""> -->
			</figure>
			<p class="logo-title">LOESPORTS</p>
			<canvas>
			
			</canvas>
			</a>
		</div>
		<?php include TEMPLATEPATH . '/templates/nav.php' ?>
	
		<div class="social">
			<a href="https://twitter.com/eloesports"><span class="icon-twitter social-icon"></span></a>
			<!-- <span class="icon-facebook"></span> -->
			<a href="https://www.twitch.tv/eloesports"><span class="icon-twitch social-icon"></span></a>
			<a href=""><span class="icon-youtube-play social-icon"></span></a>
		</div>
	</div>
</header>