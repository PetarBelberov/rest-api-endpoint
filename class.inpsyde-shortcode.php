<?php
class Inpsyde_Shortcode {
    function __construct() {
        add_shortcode( 'inpsyde_shortcode', array($this, 'shortcode' ));
    }
    public static function shortcode( ) {
        ob_start(); // start output buffering
        Inpsyde_Plugin::view('inpsyde-table');
        return ob_get_clean(); // end the buffer session
    }
}
$shortcode = new Inpsyde_Shortcode();