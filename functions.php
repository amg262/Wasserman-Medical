<?php
/**
* Enqueueing master stylesheet
*/
add_action( 'wp_enqueue_scripts', 'enqueue_good_store_theme' );

function enqueue_good_store_theme() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


/**
* Additional image sizes
*/
add_action( 'after_setup_theme', 'child_image_sizes' );

function child_image_sizes() {
    //add_image_size( 'single-thumb', 600, 450, false ); // 300 pixels wide (and unlimited height)
    //add_image_size( 'single-thumb-cropped', 500, 350, false ); // (cropped)
}

add_action( 'widgets_init', 'wasserman_medical_widgets_init' );

function wasserman_medical_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wasserman-medical' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
/**
* ACF options page
*/
if(function_exists('acf_add_options_page')) { 
  acf_add_options_page();
}

