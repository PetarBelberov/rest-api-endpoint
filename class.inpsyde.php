<?php

  class Inpsyde_Plugin {
    
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
        $data = json_decode( $request_body, true );
        if( ! empty( $data ) ) {  
            return $data;
        }
    }

    //  intermediary pages(in-between the user clicking on the activation/deactivation link and seeing the notice)
    function plugin_activation() {
        add_option( 'inpsyde_plugin_activated', time() );
    }

    function plugin_deactivation() {
        add_option( 'inpsyde_plugin_deactivated', time() );
    }
  }