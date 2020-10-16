<?php
add_action( 'wp_enqueue_scripts', 'my_child_theme_scripts' );
function my_child_theme_scripts() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-custom-style', get_stylesheet_directory_uri() . '/assets/css/custom-felix-style.css' );
    wp_enqueue_style( 'child-style-Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,600,800&display=swap" );
}
include "inc/blocks-register.php";
include "inc/cpt.php";
add_action( 'enqueue_block_editor_assets', 'my_child_theme_scripts' );
add_theme_support('align-wide');