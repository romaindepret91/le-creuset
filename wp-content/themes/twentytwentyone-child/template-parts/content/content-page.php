<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<?php 

$page_title = get_the_title();

switch($page_title) {

	case 'Vaisselle':
	case 'Service':

		$defaultBg = new WP_Query( array(
			'post_type' => 'attachment',
			'p' => 90
		));
		
		$articles = new WP_Query( array (
			'post_type' => 'articles',
			'posts_per_page' => -1,
		));

		$categorie_page = get_fields();

		$categories[] = $page_title;

		$numberOfArticles = count($articles->posts);
		?>
		<section class="categorie-page-header">
			<div class="categorie-page-header__hero">
				<img class="hero-img" src="<?= $categorie_page['pages_image_bg'] ? $categorie_page['pages_image_bg']['url'] : $defaultBg->post->guid ?>" alt="<?= $categorie_page['pages_image_bg'] ? $categorie_page['pages_image_bg']['alt'] : $defaultBg->post->post_name ?>">
			</div>
			<div class="categorie-page-header__text">
				<div class="categorie-page-header__text-content">
					<p><?= $categorie_page['pages_introduction'] ?></p>
				</div>
			</div>
		</section>
		<section class="categorie-page-main-content">
		<?php  require_once(dirname(__FILE__, 2) . '/articles-gallery.php'); ?>
		</section>
		<?php
		break;

	case 'À propos':
		?>
		<section class="wysiwyg-content">
			<?php echo get_field('apropos_editeur'); ?>
		</section>
		<?php
		break;

	default:
		?>
		<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
		</div><!-- .entry-content -->
		<?php
}
?>










