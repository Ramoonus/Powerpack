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
 * wpUpdatePHP
 * @todo fully
 */

/**
 * D3.js
 *
 * @version 3.5.6
 * @todo toggle minify
 * @since 1.0
 * @return void
 */
function rw_pp_d3js() {
 wp_enqueue_script('d3.js', plugins_url( 'js/d3/d3.min.js', __FILE__ ), array(), '3.5.6' );
}
add_action('wp_enqueue_scripts', 'rw_pp_d3js');

/**
 * Selectivizr.js
 * 
 * @version 1.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_selectivizr() {
	wp_enqueue_script('selectivizr',plugins_url( '/js/selectivizr/selectivizr.min.js' , __FILE__ ), array(), '1.0.b3' );
}
add_action('wp_enqueue_scripts', 'rw_pp_selectivizr');
wp_script_add_data( 'selectivizr', 'conditional', 'lt IE 9' ); /** new */

/** Internet Explorer Compatibility
 * @since 1.0
 * @version 11
 * @todo toggle
 */
function rw_ie9() {
    echo '<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=Edge" />';
}
add_action('wp_head', 'rw_ie9');

/**
 * Has.js
 *
 * @version 1.0
 * @todo toggle minify
 * @since 1.0
 * @return void
 */
function rw_pp_has() {
    wp_enqueue_script('has.js', plugins_url( 'js/has/has.js', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'rw_pp_has');

/**
 * Lettering.js
 *
 * @version 0.7
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_lettering() {
    wp_enqueue_script('lettering',plugins_url( '/js/lettering/jquery.lettering.js' , __FILE__ ), array('jquery'), '0.7.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_lettering');

/**
 * FitText.js
 *
 * @version 1.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_fittext() {
    wp_enqueue_script('fittext',plugins_url( '/js/fittext/jquery.fittext.js' , __FILE__ ), array('jquery'), '1.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_fittext');

/**
 * PEP.js
 *
 * @version 0.4
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_pep() {
    wp_enqueue_script('pep',plugins_url( '/js/pep/pep.min.js' , __FILE__ ), array(), '0.4' );
}
add_action('wp_enqueue_scripts', 'rw_pp_pep');

/**
 * matchMedia.js
 *
 * @version 0.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_matchmedia() {
    wp_enqueue_script('matchmedia',plugins_url( '/js/matchmedia/matchMedia.js' , __FILE__ ), array(), '0.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_matchmedia');
