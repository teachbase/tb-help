<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="contentcolumn col-sm-9">
	<h2 class="category-title"><?php single_cat_title()?></h2>
	<ul class="category-post-list post-list row">
	<?php
	global $query_string;
        $cat_id = get_query_var('cat');
        $categories = get_categories(array('parent' => $cat_id));
        
        if(count($categories) == 0)
          $categories = array(get_category($cat_id));        
       
        foreach($categories as $cat){
          $cat_posts = new WP_Query("cat=".$cat->term_id);
          
          if ($cat_posts->have_posts()){?>
            <li class="subcategory-wrapper col-md-6">
              <h2><?php echo $cat->name; ?></h2>
              <ul>
            <?php
            while($cat_posts->have_posts()){
              $cat_posts->the_post();?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           <?php
            }?>
            </ul></li>
           <?php
          }
        }?>
       </ul>
</div>
<?php get_footer(); ?>
