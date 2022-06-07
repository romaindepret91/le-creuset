
<?php

$article = get_fields();

?>

<article class="article-block">

    <div class="article-block-title">
        <h2><?= the_title(); ?></h2>
    </div>
    <div class="article-block-img">
        <img src="<?= $article['article_image']['url']?>" alt="Image de <?= $article['article_image']['title'] ?>">
    </div>
    <div class="article-block-text">
        <h3 class="article-categorie"><?= $article['article_categorie'] ?></h3>
        <div class="article-description">
            <h3 class="article-description-title">Description</h3>
            <p class="article-description-text"><?= $article['article_description'] ?></p>
        </div>
        <p class="article-price"><?= $article['article_prix'] ?> $</p>
    </div>

</article>

