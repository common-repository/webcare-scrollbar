<?php
/**
 * @package WebCareScrollbar
 * 
 */
class WebCareFunctionality  
{
    public function __construct() {
        add_action('admin_init', array($this, 'register_settings') );
    }
    
    public function register_settings()
    {
     register_setting('scrollbar-group', 'width');
     register_setting('scrollbar-group', 'color');
     register_setting('scrollbar-group', 'border');
     register_setting('scrollbar-group', 'speed');
     register_setting('scrollbar-group', 'radious');

     add_settings_section('scrollbar_section', 'You Can Customize WebCare scrollbar', array( $this, 'scrollbar_callback_section'), 'webcare-scrollbar');

     add_settings_field('width', 'Width', array( $this, 'scrollbar_callback_field_width'), 'webcare-scrollbar', 'scrollbar_section');
     add_settings_field('color', 'color', array( $this, 'scrollbar_callback_field_color'), 'webcare-scrollbar', 'scrollbar_section');
     add_settings_field('border', 'border', array( $this, 'scrollbar_callback_field_border'), 'webcare-scrollbar', 'scrollbar_section');
     add_settings_field('speed', 'speed', array( $this, 'scrollbar_callback_field_speed'), 'webcare-scrollbar', 'scrollbar_section');
     add_settings_field('radious', 'radious', array( $this, 'scrollbar_callback_field_radious'), 'webcare-scrollbar', 'scrollbar_section');
    }

    /**
     * callback of settings section
    */
    function scrollbar_callback_section(){}
        /**
     * all callback of settings fields
    */

    function scrollbar_callback_field_width()
    {
        $width = get_option('width') ? get_option('width') : '7';
        
        echo '<input type="text" name="width" id="width" class="" value="'.$width.'">';
    }
    function scrollbar_callback_field_color()
    {
        $color = get_option('color') ? get_option('color') : '#408080';
        echo '<input type="color" name="color" id="color" class="" value="'.$color.'">';
    }
    function scrollbar_callback_field_border()
    {
        $border = get_option('border') ? get_option('border') : 'none';
        echo '<input type="text" name="border" id="border" class="" value="'.$border.'">';
    }
    function scrollbar_callback_field_speed()
    {
        $speed = get_option('speed') ? get_option('speed') : '200';
        echo '<input type="text" name="speed" id="speed" class="" value="'.$speed.'">';
    }
    function scrollbar_callback_field_radious()
    {
        $radious = get_option('radious') ? get_option('radious') : '5';
        echo '<input type="text" name="radious" id="radious" class="" value="'.$radious.'">';
    }
}
