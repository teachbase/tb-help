<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="contentcolumn">
		<?php if (have_posts()) : ?>
		<div class="post">
			<ol>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ol>
		</div>
	<?php else: ?>
		<div class="post">
			<p>По вашему запросу ничего не найдено. Попробуйте изменить запрос.</p>
		</div>
	<?php endif; ?>
	</div>
<?php get_footer(); ?>