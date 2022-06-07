<?php
function ttoc_styles() {
    wp_enqueue_style( 'twenty-twenty-one-child-style',
    get_stylesheet_uri(),
    array( 'twenty-twenty-one-style' ) );
}
    add_action( 'wp_enqueue_scripts', 'ttoc_styles');

function ttoc_remove_page_editor() {
    remove_post_type_support( 'page', 'editor' );
    }
add_action( 'init', 'ttoc_remove_page_editor', 15 );
    
?>