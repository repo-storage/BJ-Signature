<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function hoverizr_scripts(){
    wp_register_script('hoverizer', get_template_directory_uri() . '/library/hoverizer/jquery.hoverizr.min.js', array('jquery'));
    wp_enqueue_script('hoverizer');
}

function hoverizr_footer(){
    ?>
    <script type="text/javascript">
        jQuery.noConflict(true);
        jQuery('.wp-post-image').hoverizr();
    </script>
    <?php

}
add_action('wp_footer', 'hoverizr_footer');
add_action('wp_enqueue_scripts', 'hoverizr_scripts');

//$hover = new mod_hoverizr();
//$hover->init();
