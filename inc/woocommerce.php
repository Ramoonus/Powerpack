<?php
/*
Plugin Name: WooCommerce Category Checklist Expander
Description: Expands the WordPress Product categories and brands
Version: 1.0.0
Plugin URI: http://www.ramoonus.nl/wordpress/category-checklist-expander/
Author: Ramon "Ramoonus" van Belzen
Author URI: http://www.ramoonus.nl
*/

/**
 *
 * Category Expander *
 * Expands category and brands *
 * @since 1.0.0
 * @todo check if brands is active
 * @version 1.0.0
 * @return void
 */
function rw_woocommerce_category_checklist_expander_css()
{

    /**
     *
     * Completely rewritten from $pagenow to get_current_screen *
     * @since 1.0.0
     */
    $screen = get_current_screen();
    if (!$screen->post_type == 'product') {
        return;
    }
}

/**
 *
 * Actual CSS which does the work */ ?> #product_catdiv div.tabs-panel, #product_branddiv div.tabs-panel { height: auto; max-height: none; } <?php }

add_action('admin_head', 'rw_woocommerce_category_checklist_expander_css');