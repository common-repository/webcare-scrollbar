<?php
/**
 * @package WebCareScrollbar
 */
/**
 * Plugin name: WebCare Scrollbar
 * Plugin URI: https://firmwaree.com/plugin
 * Description: It's a simple plugin for making your scrollbar smooth and differenc look.
 * Version: 1.0.0
 * Author: Osman Goni
 * Author URI: https://firmwaree.com
 * Licence: GPLv2 or later
 * Text Domain: WebCare Scrollbar
 */
 
/**
 * If this file is called firectly, abort!!!
 */

defined('ABSPATH') or die('Hey, what are you doing here?');

define('WEBCARE_SCROLLBAR', WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)) . '/');

/**
 * Requiring all the file
 */
require_once dirname( __FILE__ ).'/inc/init.php';
$functionality = new WebCareInit();
$functionality->register();

/**
 * Activated Plugin
 */
register_activation_hook(__FILE__, 'activated_plugin');
function activated_plugin() {
    flush_rewrite_rules();
}

/**
 * DeActivated Plugin
 */
register_deactivation_hook(__FILE__, 'deactivated_plugin');
function deactivated_plugin() {
    flush_rewrite_rules();
}

/**
 * Settings Link
 */ 
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", function($link){
    $settings_link = "<a href='admin.php?page=webcare-scrollbar' >Custom Settins </a>";
        array_push($link, $settings_link);
        return $link;
});





