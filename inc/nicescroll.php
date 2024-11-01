<?php
/**
 * @package WebCareScrollbar
 * 
 */
class WebCareNiceScroll  
{
    public function __construct() {
        add_action('wp_head', array($this, 'WebCareScrollbar_set_settings'));
    }


    function WebCareScrollbar_set_settings()
    { 
      
      $radious = get_option('radious');
      $color = get_option('color');
      $speed = get_option('speed');
      $border = get_option('border');
      $width = get_option('width');
        ?>
           <script type="text/javascript">

                jQuery(document).ready(function() {
                    jQuery("html").niceScroll({
                        cursorcolor: '<?php echo $color; ?>',
                        cursorwidth: '<?php echo $width; ?>',
                        cursorborderradius: '<?php echo $radious; ?>%',
                        scrollspeed: "<?php echo $speed; ?>",
                        scrollborder: '<?php echo $border; ?>',
                        touchbehaviour: true,
                        horizrailenabled: false,
                    });
                });
            
            </script>
        <?php

    }
}
