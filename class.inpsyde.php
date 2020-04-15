<?php

  class Inpsyde_Plugin {
    private static $data = array();
    
    /**
     * Register the routes for the objects of the controller.
    */
    public static function register_endpoint () {  
        // endpoints registration
        register_rest_route('endpoint/', 'inpsyde/', array(
            'methods' => 'GET',
            'callback' => array('Inpsyde_Plugin', 'callback'),
        ) );
    }

    public static function callback() {
        // retrieving data from the endpoint
        $request = wp_remote_get( 'https://jsonplaceholder.typicode.com/users/' );
            if( is_wp_error( $request ) ) {
            return false;
        }

        $request_body = wp_remote_retrieve_body( $request );
        
        // Translate into an array
       self::$data = json_decode( $request_body, true );
        
        if( ! empty( self::$data ) ) {  
            
            return (self::$data);
        }
    }

    //  intermediary pages(in-between the user clicking on the activation/deactivation link and seeing the notice)
    function plugin_activation() {
        add_option( 'inpsyde_plugin_activated', time() );
    }

    function plugin_deactivation() {
        add_option( 'inpsyde_plugin_deactivated', time() );
    }

    public function shortcode( ) {
        ob_start(); // start output buffering
        Inpsyde_Plugin::html_form_code(); 
        return ob_get_clean(); // end the buffer session
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

    
  }