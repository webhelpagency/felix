<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {


        acf_register_block_type(array(
            'name'              => 'header-discount',
            'title'             => __('Header discount'),
            'description'       => __('Header discount block.'),
            'render_template'   => '/partials/gutenberg-blocks/header-discount.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'header-block', 'custom-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'advantages-section',
            'title'             => __('Advantages section'),
            'description'       => __('Advantages section block.'),
            'render_template'   => '/partials/gutenberg-blocks/advantages-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'advantages', 'custom-block' ),
        ));

        acf_register_block_type(array(
            'name'              => 'selling expectations',
            'title'             => __('Selling expectations'),
            'description'       => __('Selling expectations block.'),
            'render_template'   => '/partials/gutenberg-blocks/selling-expectations.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'selling', 'custom-block' ),
        ));
        acf_register_block_type(array(
            'name'              => 'reviews',
            'title'             => __('Reviews'),
            'description'       => __('Reviews block.'),
            'render_template'   => '/partials/gutenberg-blocks/reviews.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'reviews', 'custom-block' ),
        ));
    }
}
