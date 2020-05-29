<?php

class Inpsyde_Admin {

	private static $initiated = false;

    public static function init() {
		if ( ! self::$initiated ) {
            //  shortcut to access the static class method
			self::init_hooks();
        }
    }

    public static function init_hooks() {
        self::$initiated = true;
        add_filter( 'plugin_action_links_' .plugin_basename( plugin_dir_path( __FILE__ ) . 'inpsyde.php'), array('Inpsyde_Admin', 'plugin_action_link' ));
    }

    // Plugin action link 
    public static function plugin_action_link( $link ) {
        $link = array_merge( array(
            '<a href="' . esc_url( plugin_dir_url( __DIR__ ) . 'inpsyde-plugin-task' ) . '">' . __( 'Settings', 'textdomain' ) . '</a>'
        ), $link );

	return $link;
    }
}
