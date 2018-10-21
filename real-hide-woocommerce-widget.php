<?php

/*
Plugin Name: Real Hide WooCommerce Widget
Plugin URI: https://github.com/RealCodeLab/real-hide-woocommerce-widget
Description: Plugin to hide WooCommerce Widgets
Version: 1.0
Author: andergmartins
Author URI: http://anderson.grudtner.me
License: GPL3
*/

// Remove the heavy dashboard widgets
function rhww_remove_dashboard_meta()
{
    remove_meta_box('woocommerce_network_orders', 'dashboard', 'normal');
}

add_action('admin_init', 'rhww_remove_dashboard_meta');
