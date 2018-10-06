<?php
$latest_news_query_args = array(
  'post_type'       =>  'post',
  'post_status'     =>  'publish',
  'posts_per_page'  =>  3
);
$latest_news_query = new WP_Query( $latest_news_query_args );
$items_order = 0;

if ( $latest_news_query->have_posts() ) {
	while ( $latest_news_query->have_posts() ) {
    $latest_news_query->the_post();
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
