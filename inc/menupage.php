<?php
/**
 * @package WebCareScrollbar
 * 
 */
class WebCareMenuPage 
{
    public function __construct() {
        add_action('admin_menu', array($this, 'scrollbar_menu_page') );
    }
    function scrollbar_menu_page(){
        add_menu_page("WebCare Scrollbar", "Scrollbar", "manage_options", "webcare-scrollbar", array($this, "webcare_scrollbar_page_function") );
    }

    function webcare_scrollbar_page_function()
    {?>
        <div class="wrap">
            <?php
            settings_errors(); ?>
            <form action="options.php" method="post">
                <?php
                settings_fields('scrollbar-group');
                do_settings_sections('webcare-scrollbar');
                submit_button('Save Changes');
                ?>
            
            </form>
        </div>
       <?php
   
    }
}


