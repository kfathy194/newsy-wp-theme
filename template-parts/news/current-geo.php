<?php
$current_geo_query_args = array(
  'post_type'       =>  'post',
  'post_status'     =>  'publish',
  'category_name'   =>  'egypt'
);
$current_geo_query = new WP_Query( $current_geo_query_args );
$items_order = 0;

if ( $current_geo_query->have_posts() ) {
	while ( $current_geo_query->have_posts() ) {
    $current_geo_query->the_post();
    $items_order++;
    set_query_var( 'items_order', $items_order );
    get_template_part( 'template-parts/news/item' );
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>
