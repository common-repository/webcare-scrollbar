<?php
/**
 * @package WebCareScrollbar
 * 
 */
 
class WebCareInit  
{
    public $plugin;
    public function __construct()
    {
       $this->plugin = dirname(__FILE__); 
    }

    public function register()
    {
        include_once $this->plugin.'/functionality.php';
        include_once $this->plugin.'/assets.php';
        include_once $this->plugin.'/menupage.php';
        include_once $this->plugin.'/nicescroll.php';

        new WebCareFunctionality();
        new WebCareFiles();
        new WebCareMenuPage();
        new WebCareNiceScroll();

    }

}
