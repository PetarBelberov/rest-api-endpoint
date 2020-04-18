<?php
class Inpsyde_REST_API {
    private static $data = array();

     /**
     * Register the routes for the objects of the controller.
    */
    public static function init() {  
        // endpoints registration
        register_rest_route('endpoint/', 'inpsyde/', array(
            'methods' => 'GET',
            'callback' => array('Inpsyde_REST_API', 'callback'),
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

}