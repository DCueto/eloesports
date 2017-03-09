<?php get_header(); ?>

<main class="container">
	<div class="click-block"></div>
	<div class="banner"></div>
	<?php rewind_posts(); ?>
	
	<?php include TEMPLATEPATH . '/templates/relevant/relevant-lol.php' ?>
	<div class="wrap">
		<section class="featured-articles">
			<h2 class="featured-articles-title section-title">FEATURED</h2>
			<div class="article-wrapper">
				<!--
				<?php /*
				$featured_posts = get_posts(array(
					'meta_key' => 'post_views_count',
					'order' => 'desc',
					'numberposts' => 6,
					'category' => '-8, -9, -3, -7'
				)); *
				?>
				<?php if($featured_posts){ foreach ($featured_posts as $post) : setup_postdata( $post ); ?>
				<?php include TEMPLATEPATH . '/templates/theloop.php'?>
				<?php endforeach; wp_reset_postdata(); } */?> 
				-->

				<?php 
					$popular_posts = array(
						//'header' => 'Articulos Populares',
						'limit' => 6,
						'cat' => 5,
						'range' => 'weekly',
						//'freshness' => 1,
						'order_by' => 'avg',
						'stats_date' => 1,
						'stats_date_format' => 'F j, Y',
					);
					
					/*if (function_exists('wpp_custom_html')){
						wpp_custom_html($popular_posts);
					}*/

					if (function_exists('wpp_get_mostpopular')){
						//$print_posts = wpp_post($popular_posts);
						wpp_get_mostpopular($popular_posts);
					}
				?>
				
			</div>
		</section>
		<section class="videos">
			<h2 class="videos-title section-title">Videos</h2>
			<div class="videos-container">
				<?php 
					$last_videos = get_posts(array(
						'category' => 13,
						'order' => 'desc',
						'numberposts' => 3,
					));
				?>
				<?php if($last_videos){ foreach ($last_videos as $post) : setup_postdata($post); ?>
				<?php include TEMPLATEPATH . '/templates/videos.php' ?>
				<?php endforeach; wp_reset_postdata(); }?>
			</div>
		</section>
		<section class="last-articles">
			<h2 class="last-articles-title section-title">Últimos Posts</h2>
			<div class="article-wrapper">
				<?php
					$last_posts = get_posts(array(
						'order' => 'desc',
						'numberposts' => 10,
						'category' => 5,
					));
			 	?>
				<?php if($last_posts){ foreach ($last_posts as $post) : setup_postdata( $post ); ?>
				<?php include TEMPLATEPATH . '/templates/theloop.php'?>
				<?php endforeach; wp_reset_postdata(); }?>
			</div>
		</section>
	</div>

</main>


<?php get_footer(); ?>
</body>
</html>