<?php
/**
 * Template for displaying search forms in Newsy
 *
 * @package WordPress
 * @subpackage Newsy
 * @since Newsy 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Searching for &hellip;', 'placeholder', '' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><img src="<?php echo get_template_directory_uri().'/assets/images/search-icon.png'; ?>" alt="search-icon"></button>
</form>