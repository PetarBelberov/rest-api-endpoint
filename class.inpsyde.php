<?php

  class Inpsyde_Plugin {
    
    public static function init() {
      add_action( 'wp_enqueue_scripts', array( 'Inpsyde_Plugin', 'load_resources' ) );
    }

    public static function view( $name ) {
      $file = plugin_dir_path( __FILE__ ) . 'views/'. $name . '.php';
      include( $file );
    }
    
    public static function load_resources() {
      wp_register_style( 'inpsyde-style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', array(), true );
      wp_enqueue_style( 'inpsyde-style' );

      wp_register_script( 'inpsyde-script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array(), true );
      wp_enqueue_script( 'inpsyde-script' );
	  }
  }
