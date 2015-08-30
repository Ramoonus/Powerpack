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
 * @version 4.3
 * @since 1.0
 */
 if ( version_compare( $GLOBALS['wp_version'], '4.3', '<' ) ) { 
 	// todo
 }

/**
 * D3.js
 *
 * @version 3.5.6
 * @todo toggle minify
 * @since 1.0
 * @return void
 */
function rw_pp_d3js() {
 wp_enqueue_script('d3.js', plugins_url( 'js/d3/d3.min.js', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'rw_pp_d3js');
