<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
	<article class="article">
		<a href="<?php the_permalink(); ?>">
		<div class="blur-bottom"></div>
		<div class="article-info">
			<p class="article-info-cat">Vainglory</p>
			<p class="article-info-date">Date</p>
		</div>
		<?php if ( has_post_thumbnail() ) { ?>
			<figure class="article-thumb">
				<?php the_post_thumbnail('my-size'); ?> 
			</figure>
            <?php 
            }else{ 
            ?>
            <?php
            } 
            ?>

		<div class="article-content">
			<h3 class="article-content-title"><?php the_title(); ?></h3>
			<div class="article-content-container">
				<p class="article-content-container-description"><?php echo rwmb_meta('rw_frased'); ?></p>
			</div>
		</div>
		</a>
	</article>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

?>