<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="contentcolumn col-sm-9">
	<h2 class="category-title"><?php single_cat_title()?></h2>
	<ul class="category-post-list post-list row">
	<?php
	$category = get_query_var('cat');
	$category_current = array();
	$category_prev = array();
	$i =0;
	$cat_posts = new WP_Query($query_string."&orderby=parent&order=ASC");
	if ($cat_posts->have_posts()):while($cat_posts->have_posts()):$cat_posts->the_post();
		$category_current = get_the_category($post->ID); 
		if($category_current[0]->term_id != $category_prev[0]->term_id && cat_is_ancestor_of($category, $category_current[0]->term_id)):?>
			<?php if ($i!=0):?>
				</ul></li>
			<?php endif;?>
			<li class="subcategory-wrapper col-md-6">
				<h2><?php echo $category_current[0]->name; ?></h2>
				<ul>
		<?php endif?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php $category_prev = $category_current; $i++;endwhile; else: ?> <?php endif; ?>
	</ul>
</div>
<?php get_footer(); ?>