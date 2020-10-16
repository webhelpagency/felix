<?php
add_action('init', 'init_new_custom_post_type');
function init_new_custom_post_type(){
    register_post_type('testimonials', array(
        'labels'             => array(
            'name'               => 'testimonials',
            'singular_name'      => 'Testimonial',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new testimonial',
            'edit_item'          => 'Edit testimonial',
            'new_item'           => 'New testimonial',
            'view_item'          => 'View testimonial',
            'search_items'       => 'Search testimonial',
            'not_found'          =>  'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Testimonials'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 27,
        'show_in_rest' => false,
        'supports'           => array('title','editor','thumbnail')
    ) );
}
