<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="contentcolumn">
		<ol>
			<?php $temp = $wp_query; $wp_query= null; $wp_query = new WP_Query(); $wp_query->query( 'cat=8&showposts=99' ); ?>
			<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; else: ?> <?php endif; ?> <?php $wp_query = null; $wp_query = $temp;?>
		</ol>
	</div>
<?php get_footer(); ?>