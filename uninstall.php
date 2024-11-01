<?php
/**
 * Trigger this file on Plugin uninstall
 *
 * @package WebCareScrollbar
 */


if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}


// Somewhere in your plugin, maybe as a class property
$webcareScroll = array('color', 'border', 'radious', 'speed', 'width'); // etc

// Clear up our settings
foreach($webcareScroll as $optionName) {
    delete_option($optionName);
}

