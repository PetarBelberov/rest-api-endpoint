<?php
class Inpsyde_REST_API {
    public static $data = array();

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
        $key = 'inpsyde-key';
        
        if( !wp_cache_get( $key ) ) {
            // retrieving data from the endpoint
            $request = wp_remote_get( 'https://jsonplaceholder.typicode.com/users/' );

            //error handling
            if( is_wp_error( $request ) ) {
                $error_string = $request->get_error_message();
                echo '<div id="message" class="error"><p>' . 'An error occured: ' . $error_string . '</p></div>';
                return false;
            }
            
            $request_body = wp_remote_retrieve_body( $request );
        
            // Translate into an array
            self::$data = json_decode( $request_body, true );
            
            if( ! empty( self::$data ) ) {  
                wp_cache_set( $key , self::$data ); // Adds data to the cache
                return (self::$data);
            }
        }
    }
}