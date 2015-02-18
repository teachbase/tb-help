<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div class="contentcolumn">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<?php endwhile; else: ?> <?php endif; ?>
	</div>
<?php get_footer(); ?>