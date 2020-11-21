<?php

/**
 * enqueue TwentyTwenty styles
 */
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

/**
 * Enqueues Bootstrap on the frontend.
 */
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );


/**
 * Registers the accordion block (or any others you want to make).
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