<?php
// include 'class.inpsyde.php';
// use Inpsyde_Plugin_Task\Inpsyde_Plugin;

class Inpsyde_Shortcode {
 
    public static function init() {
        add_shortcode( 'inpsyde_shortcode', array('Inpsyde_Shortcode', 'shortcode' ));
    }
   
    public static function shortcode( ) {
        ob_start(); // start output buffering
        // \Inpsyde_Plugin_Task\Inpsyde_Plugin::view('inpsyde-table');
        Inpsyde_Plugin::view('inpsyde-table');
        return ob_get_clean(); // end the buffer session
    }
}
// $shortcode = new Inpsyde_Shortcode();