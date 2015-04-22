<?php 

	function qt_custom_breadcrumbs() {
	 
	  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	  $delimiter = ' >'; // delimiter between crumbs
	  $home = 'Помощь'; // text for the 'Home' link
	  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	  $before = '<span class="current">'; // tag before the current crumb
	  $after = '</span>'; // tag after the current crumb
	 
	  global $post;
	  $homeLink = get_bloginfo('url');
	 
	  if (is_home() || is_front_page()||is_search()) {
	 
		if ($showOnHome == 1) echo '<div id="crumbs" class="col-xs-12"><a href="' . $homeLink . '">' . $home . '</a></div>';
	 
	  } else {
	 
		echo '<div id="crumbs" class="col-xs-12"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
	 
		if ( is_category() ) {
		  $thisCat = get_category(get_query_var('cat'), false);
		  if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
		  echo $before . single_cat_title('', false) . $after;
	 
		} elseif ( is_day() ) {
		  echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
		  echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
		  echo $before . get_the_time('d') . $after;
	 
		} elseif ( is_month() ) {
		  echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
		  echo $before . get_the_time('F') . $after;
	 
		} elseif ( is_year() ) {
		  echo $before . get_the_time('Y') . $after;
	 
		} elseif ( is_single() && !is_attachment() ) {
		  if ( get_post_type() != 'post' ) {
			$post_type = get_post_type_object(get_post_type());
			$slug = $post_type->rewrite;
			echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
			if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
		  } else {
			$cat = get_the_category(); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
			echo $cats;
			if ($showCurrent == 1) echo $before . get_the_title() . $after;
		  }
	 
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		  $post_type = get_post_type_object(get_post_type());
		  echo $before . $post_type->labels->singular_name . $after;
	 
		} elseif ( is_attachment() ) {
		  $parent = get_post($post->post_parent);
		  $cat = get_the_category($parent->ID); $cat = $cat[0];
		  echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
		  echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
		  if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	 
		} elseif ( is_page() && !$post->post_parent ) {
		  if ($showCurrent == 1) echo $before . get_the_title() . $after;
	 
		} elseif ( is_page() && $post->post_parent ) {
		  $parent_id  = $post->post_parent;
		  $breadcrumbs = array();
		  while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
			$parent_id  = $page->post_parent;
		  }
		  $breadcrumbs = array_reverse($breadcrumbs);
		  for ($i = 0; $i < count($breadcrumbs); $i++) {
			echo $breadcrumbs[$i];
			if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
		  }
		  if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	 
		} elseif ( is_tag() ) {
		  echo $before . 'По тегу "' . single_tag_title('', false) . '"' . $after;
	 
		} elseif ( is_author() ) {
		   global $author;
		  $userdata = get_userdata($author);
		  echo $before . 'Посты от ' . $userdata->display_name . $after;
	 
		} elseif ( is_404() ) {
		  echo $before . 'Ошибка 404' . $after;
		}
	 
		if ( get_query_var('paged') ) {
		  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
		  echo __('Page') . ' ' . get_query_var('paged');
		  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}
	 
		echo '</div>';
	 
	  }
	} // end qt_custom_breadcrumbs()
	add_theme_support('post-thumbnails');

	add_theme_support('menus');

	function qna_setup() {
		register_nav_menus(
			array(
				'homepage-menu' => __('Меню на главной','z7_qna')
			)
		); 
	}

	add_action( 'after_setup_theme', 'qna_setup' );

	function register_theme_sidebars() {
		register_sidebar(
			array(
				'id' => 'sidebar-primary',
				'name' => __( 'Primary' ),
				'description' => __( 'Главный сайдбар' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="my_widget-title">',
				'after_title' => '</h4>'
			)
		);
		register_sidebar(
			array(
				'id' => 'sidebar-right',
				'name' => __( 'Right' ),
				'description' => __( 'Правый сайдбар' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="my_widget-title">',
				'after_title' => '</h4>'
			)
		);
		register_sidebar(
			array(
				'id' => 'first-footer-widget-area',
				'name' => __( 'Первый сайдбар подвала' ),
				'description' => __( 'Первый сайдбар подвала' ),
				'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
		register_sidebar(
			array(
				'id' => 'second-footer-widget-area',
				'name' => __( 'Второй сайдбар подвала' ),
				'description' => __( 'Второй сайдбар подвала' ),
				'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
		register_sidebar(
			array(
				'id' => 'third-footer-widget-area',
				'name' => __( 'Третий сайдбар подвала' ),
				'description' => __( 'Третий сайдбар подвала' ),
				'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
		register_sidebar(
			array(
				'id' => 'fourth-footer-widget-area',
				'name' => __( 'Четвертый сайдбар подвала' ),
				'description' => __( 'Четвертый сайдбар подвала' ),
				'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
		register_sidebar(
			array(
				'id' => 'fifth-footer-widget-area',
				'name' => __( 'Пятый сайдбар подвала' ),
				'description' => __( 'Пятый сайдбар подвала' ),
				'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
		register_sidebar(
			array(
				'id' => 'sixth-footer-widget-area',
				'name' => __( 'Шестой сайдбар подвала' ),
				'description' => __( 'Шестой сайдбар подвала' ),
				'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4>'
			)
		);
	}
	add_action( 'widgets_init', 'register_theme_sidebars' );

	add_theme_support('category-thumbnails');

	add_theme_support('custom-field');

	function my_cat_orderby( $query ) {
		if ( $query->is_category() && $query->is_main_query() ) {
			$query->set( 'orderby', 'parent' );
			$query->set( 'order', 'asc' );
		}
	}
	add_action( 'pre_get_posts', 'my_cat_orderby' );
?>