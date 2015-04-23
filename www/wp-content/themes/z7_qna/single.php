<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div class="contentcolumn col-sm-6">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<?php endwhile; else: ?> <?php endif; ?>
		<div class="like-block row">
			<h4 class="col-sm-8">Оказалась ли эта статья полезной?</h4>
			<div class="col-sm-4">
				<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
			</div>
		</div>
		<div class="fave row col-xs-12">
			<?php wp_related_posts()?>
		</div>
		
	</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>