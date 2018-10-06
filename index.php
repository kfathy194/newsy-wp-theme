<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Newsy
 * @since Newsy 1.0
 */

get_header(); ?>
<article class="ads__top-banner">
  <?php get_template_part( 'template-parts/ads/wide-banner' ); ?>
</article>

<header class="main-header">
  <?php get_template_part( 'template-parts/navigation/main-menu' ); ?>
</header>
<article class="app-container">
  <!-- app-container END-->
  <article class="latest-news">
    <section class="left-unit">
      <?php get_template_part( 'template-parts/news/latest' ); ?>
    </section>
    <?php get_template_part( 'template-parts/ads/item' ); ?>
  </article>

  <article class="slider__current-geo">
    <h1 class="section-title">egypt news</h1>
    <section class="slider-container">
      <?php get_template_part( 'template-parts/news/current-geo' ); ?>
    </section>
  </article>

  <article class="featured-news">
    <section class="featured-container">
      <h1 class="section-title">features</h1>
      <div class="list-items">
        <?php get_template_part( 'template-parts/news/featured' ); ?>
      </div>
    </section>

    <section class="top-stories-container">
      <h1 class="section-title">top stories</h1>
      <div class="list-items">
        <ol>
          <?php get_template_part( 'template-parts/news/top' ); ?>
        </ol>
      </div>
    </section>
  </article>
</article> <!-- app-container END-->
<?php get_footer(); ?>
