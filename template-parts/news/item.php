<?php
$post_category = get_the_category();
$post_category_name = $post_category[0]->name;
?>

<figure class="news-item item-<?= $items_order;?>">
  <img class="news-item__img" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>">
  <figcaption>
    <span class="news-item__tag"><?= $post_category_name; ?></span>
    <a href="<?= permalink_link(); ?>" class="news-item__title"><?= get_the_title(); ?></a>
  </figcaption>
</figure>
