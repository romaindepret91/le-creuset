<?php
get_header();

$homepage_content = get_fields();

$defaultBg = new WP_Query( array(
    'post_type' => 'attachment',
    'p' => 90
));

$articles = new WP_Query( array (
    'post_type' => 'articles',
    'posts_per_page' => -1,
));

$categories = [];
while( $articles->have_posts() ) {

    $articles->the_post(); 
    $article = get_fields();
    if(!in_array($article['article_categorie'], $categories))
        $categories[] = $article['article_categorie'];
}

$numberOfArticles = 4;
?>

<section class="homepage-header">
    <div class="homepage-header__hero">
        <img class="hero-img" src="<?= $homepage_content['homepage_image_bg'] ? $homepage_content['homepage_image_bg']['url'] : $defaultBg->post->guid ?>" alt="<?= $homepage_content['homepage_image_bg'] ? $homepage_content['homepage_image_bg']['alt'] : $defaultBg->post->post_name ?>">
        <div class="hero-title"><?= $homepage_content['homepage_slogan'] ?></div>
    </div>
    <div class="homepage-header__text wrapper">
        <div class="homepage-header__text-content">
            <p><?= $homepage_content['homepage_introduction'] ?></p>
        </div>
    </div>
</section>
<section class="homepage-main-content">
   <?php  require_once('template-parts/articles-gallery.php'); ?>
</section>

<?php

get_footer();
?>