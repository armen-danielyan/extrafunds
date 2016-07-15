<?php

/**
 * Enqueues Scripts and Styles
 */

add_action( 'wp_enqueue_scripts', 'loadScriptsStyles' );
function loadScriptsStyles() {
    wp_enqueue_style( 'extrafunds-bootstrap-css', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'extrafunds-style-css', get_stylesheet_uri(), array( 'extrafunds-bootstrap-css' ), null );
    wp_enqueue_style( 'extrafunds-fontawesome-css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array( 'extrafunds-bootstrap-css' ), null );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'extrafunds-bootstrap-js', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), null );
    wp_enqueue_script( 'extrafunds-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), null );
}

/**
 * Register Thumbnails
 */

add_theme_support( 'post-thumbnails' );
//add_image_size( 'xs-thumb', 400, 300, true );
//add_image_size( 'md-thumb', 400, 300, true );
add_image_size( 'lg-thumb', 768, 512, true );
//add_image_size( 'xl-thumb', 1024, 768, true );

/**
 * Register Menus
 */

add_action( 'init', 'registerMenus' );
function registerMenus() {
    register_nav_menus( array(
        'header-menu'   => 'Header Menu',
        //'footer-menu'   => 'Footer Menu'
    ));
}

/**
 * Include Bootstrap NavWalker
 */

require_once 'lib/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';