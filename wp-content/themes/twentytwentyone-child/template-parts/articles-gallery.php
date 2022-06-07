
<?php if( $articles->have_posts() ): ?>
    <?php foreach($categories as $categorie) : ?>
        <?php  $i = 1; ?>
        <div class="<?= strtolower($categorie) ?>">
            <div class="<?= strtolower($categorie) ?>-title">
                <h2><?= $categorie ?></h2>
            </div>
            <div class="<?= strtolower($categorie) ?>-content">
                <?php while( $articles->have_posts() ) : $articles->the_post(); ?>
                    <?php  $article = get_fields(); ?>
                    <?php if($article['article_categorie'] === $categorie && $article['article_actif'] && $i <= $numberOfArticles) : ?>
                        <div class="<?= strtolower($categorie) ?>-item">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?= $article['article_image']['url'];?>" alt="<?= the_title(); ?>" class="<?= strtolower($categorie) ?>-img">
                                <div class="item-text-content">
                                    <h3 class="item-title"><?php the_title()?></h3>
                                </div>
                            </a>
                        </div>
                    <?php $i++; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

