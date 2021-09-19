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
