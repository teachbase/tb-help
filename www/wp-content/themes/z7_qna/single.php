<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div class="contentcolumn">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<?php endwhile; else: ?> <?php endif; ?>
		<div class="fave">
			<span class="title">Похожие вопросы</span>
			<ul>
				<?php $temp = $wp_query; $wp_query= null; $wp_query = new WP_Query(); $wp_query->query( 'showposts=3&orderby=rand' ); ?>
			<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; else: ?> <?php endif; ?> <?php $wp_query = null; $wp_query = $temp;?>
			</ul>
		</div>
	</div>
<?php get_footer(); ?>