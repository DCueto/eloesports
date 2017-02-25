<?php get_header(); ?>

<main class="container">
	<?php rewind_posts(); ?>

	<?php include TEMPLATEPATH . '/templates/relevant.php' ?>
	<div class="wrap">
		<section class="featured-articles">
			<?php include TEMPLATEPATH . '/templates/theloop.php' ?>
		</section>
	</div>

</main>


<?php get_footer(); ?>
</body>
</html>
