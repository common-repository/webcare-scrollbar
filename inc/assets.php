<?php
/**
 * @package WebCareScrollbar
 * 
 */

class WebCareFiles 
{   
    public $plugin;

    public function __construct() {

        add_action('wp_enqueue_scripts', array( $this, 'connect_nice_scroll') );
        add_action('admin_enqueue_scripts', array( $this, 'all_backeend_connect') );
    }
    public function connect_nice_scroll()
    {
        wp_enqueue_script('wsjs', WEBCARE_SCROLLBAR.'/public/js/jquery.nicescroll.min.js', array('jquery'), 1.0, true);
    }

    function all_backeend_connect(){
        wp_enqueue_script('wscolorpicker', WEBCARE_SCROLLBAR . '/public/js/colorpicker.js', array('jquery'), 1.0, true);
        wp_enqueue_style('wscolor', WEBCARE_SCROLLBAR . '/public/css/colorpicker.css', 1.0);
    }
    
}










