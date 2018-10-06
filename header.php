<?php 
/**
 * The template for displaying the header
 *
 * Displays all of the head element and the opening tags of body and #app element.
 *
 * @package WordPress
 * @subpackage Newsy
 * @since Newsy 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta name="description" content="<?php 
        if ( is_single() ) {
            single_post_title('', true); 
        } else {
            bloginfo('name'); echo "
                - "; bloginfo('description');
        }
        ?>" />
        <?php get_favicon(get_template_directory_uri() . '/assets/images/favicon'); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <main id="app" class="app">
