<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="contentcolumn">
		<ol>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; else: ?> <?php endif; ?>
		</ol>
	</div>
<?php get_footer(); ?>