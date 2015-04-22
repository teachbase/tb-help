<?php get_header(); ?>
<h3>Чем мы можем Вам помочь?</h3>
<div class="subtitle">Выберите категорию, чтобы найти нужную справочную информацию</div>
<div class="contentcolumn">
	<?php 
	$args = array(
		'theme_location'  => 'homepage-menu',
		'container'       => 'div',
		'container_class' => 'row',
		'container_id'    => 'home-page-menu',
		'menu_class'      => 'menu col-xs-12',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);


	wp_nav_menu( $args ); ?>
	<?php 
		$faq = get_category_by_slug('faq');
		$my_wp_query= null; $my_wp_query = new WP_Query(); $my_wp_query->query( 'cat='.$faq->cat_ID );
		if ($my_wp_query->have_posts()) :
	?>
		<h3><?php echo $faq->name;?></h3>
		<ul class="faq-list row">
			<?php  while ($my_wp_query->have_posts()) : $my_wp_query->the_post(); ?>
				<li class="col-sm-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; else: ?> <?php endif; ?> <?php $my_wp_query = null; $my_wp_query = $temp;?>
		</ul>
</div>
<?php get_footer(); ?>