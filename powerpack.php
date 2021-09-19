<?php
/*
Plugin Name: Powerpack
Plugin URI:  http://wordpress.org/extend/plugins/powerpack/
Description: Adds a dozen of plugins in one go
Version:     1.0-alpha
Author:      Ramoonus
Author URI:  http://www.ramoonus.nl/wordpress/powerpack/
Text Domain: powerpack
Domain Path: /language
 */

/**
 * Detect if WordPress is above 4.3
 * 
 * @todo: msg, disable self
 * @version 4.6
 * @since 1.0
 */
 if ( version_compare( $GLOBALS['wp_version'], '4.6', '<' ) ) { 
 	// todo
 }

/**
 * Respond.js
 *
 * @version 1.4.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_respond() {
    wp_enqueue_script('respondjs',plugins_url( '/js/respond/respond.min.js' , __FILE__ ), array(), '1.4.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_respond');

/**
 * Amplify
 *
 * @version 1.1.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_amplify() {
    wp_enqueue_script('amplify',plugins_url( '/js/amplify/amplify.min.js' , __FILE__ ), array(), '1.1.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_amplify');

/**
 * Enhance
 *
 * @version 1.1.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_enhance() {
    wp_enqueue_script('enhance',plugins_url( '/js/enhance/enhance.js' , __FILE__ ), array(), '1.1.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_enhance');

/**
 * Explorer Canvas
 * excanvas
 *
 * @version 1.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_excanvas() {
    wp_enqueue_script('excanvas',plugins_url( '/js/excanvas/excanvas.js' , __FILE__ ), array(), '1.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_excanvas');

/**
 * html5shiv
 *
 * @version 3.7.3
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_html5shiv() {
    wp_enqueue_script('html5shiv',plugins_url( '/js/html5shiv/html5shiv.min.js' , __FILE__ ), array(), '3.7.3' );
}
add_action('wp_enqueue_scripts', 'rw_pp_html5shiv');

/**
 * Respond.js
 *
 * @version 1.0.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_ramonjs() {
    wp_enqueue_script('ramonjs',plugins_url( '/js/ramon/ramon.js' , __FILE__ ), array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_ramonjs');

/** WooCommerce
 * Category Expander
 * @version 1.0.0
 * @since 1.0.0
 */
include("inc/woocommerce.php");

/** Integratie jQuery Updater
 * @since 1.0.0
 */
include("inc/jqu.php");


/** Integratie jQuery Updater
 * @since 1.0.0
 * @version 1.0.0
 */
include("inc/common-image-size.php.php");
