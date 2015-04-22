<?php get_header(); ?>
<?php get_sidebar();
global $wp_query; ?>
<div class="contentcolumn col-sm-9">
		<div class="result-heading">По запросу «<?php echo get_search_query(); ?>»<br>найдено <?php echo $wp_query->found_posts;?> результатов</div>
		<?php if (have_posts()) : ?>
		<div class="post search-results">
			<ul>
				<?php while (have_posts()) : the_post(); ?>
				<li><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<div class="excrpt"><?php if (function_exists('relevanssi_the_excerpt')) { relevanssi_the_excerpt(); }; ?></div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php else: ?>
		<div class="post">
			<p>По вашему запросу ничего не найдено. Попробуйте изменить запрос.</p>
		</div>
	<?php endif; ?>
	</div>
<?php get_footer(); ?>