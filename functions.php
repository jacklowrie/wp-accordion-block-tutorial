<?php

/**
 * enqueue TwentyTwenty styles
 */
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

/**
 * Enqueues Bootstrap on the frontend and in the block editor.
 */
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap-scripts','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '', true );
}
add_action( 'enqueue_block_assets', 'enqueue_bootstrap' );


/**
 * Registers the accordion block (and any others you want to make).
 */
function register_acf_block_types() {
    acf_register_block_type(array(
        'name'              => 'accordion',
        'title'             => __('Accordion'),
        'category'          => 'custom',
        'render_template'   => 'blocks/accordion.php',
    ));
}

add_action( 'acf/init', 'register_acf_block_types' );