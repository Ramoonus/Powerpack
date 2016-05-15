<?php
/*
Plugin Name: Common Image Size
Description: Adds extra image sizes of default resolutions to WordPress
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
Version: 1.0
*/

/**
 * Add standard image sizes
 * add_image_size( $name, $width, $height, $crop ); *
 *  * @todo  xga // xga+ // wxga // wxga2 // wxga3 // sxga // sxga2
 * @todo sxga+ // wxga+ // hd+ // uxga // wsxga // fhd add_image_size( 'fhd', '1920', '1024', true ); // WUXGA // QWXGA // WQHD // WQXGA // 4k
 */
add_image_size('vga', 640, 480, true);
add_image_size('svga', 800, 600, true);
add_image_size('wsvga', 1024, 600, true);
add_image_size('hd', 1360, 768, true);
