<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="contentcolumn">
		<?php if (have_posts()) : ?>
		<div class="post">
			<ol>
				<? while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ol>
		</div>
	<? else: ?>
		<div class="post">
			<h1>Ошибка 404</h1>
			<p>По вашему запросу ничего не найдено. Попробуйте изменить запрос.</p>
		</div>
	<?php endif; ?>
	</div>
<?php get_footer(); ?>