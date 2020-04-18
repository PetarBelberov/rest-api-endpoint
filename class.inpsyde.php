<?php

  class Inpsyde_Plugin {
    private static $initiated = false;

    public static function init() {
		if ( ! self::$initiated ) {
			self::init_hooks();
		}
    }
    
    public static function init_hooks() {
        add_action( 'wp_enqueue_scripts', array( 'Inpsyde_Plugin', 'load_resources' ) );
    }
   
    //  intermediary pages(in-between the user clicking on the activation/deactivation link and seeing the notice)
    function plugin_activation() {
        add_option( 'inpsyde_plugin_activated', time() );
    }

    function plugin_deactivation() {
      add_option( 'inpsyde_plugin_deactivated', time() );
    }

    public static function view( $name, array $args = array() ) {
      $args = apply_filters( 'inpsyde_view_arguments', $args, $name );
      
      foreach ( $args AS $key => $val ) {
        $key = $val;
      }
      
      load_plugin_textdomain( 'inpsyde' );

      $file = INPSYDE__PLUGIN_DIR . 'views/'. $name . '.php';

      include( $file );
    }
    
    public static function load_resources() {
      wp_register_script( 'inpsyde-script', plugin_dir_url( __FILE__ ) . 'assets/inpsyde_script.js', array(), true );
      wp_enqueue_script( 'inpsyde-script' );
	  }
  }
