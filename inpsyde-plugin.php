<?php
/*
  Plugin Name: Inpsyde Endpoint
  Plugin URI: #
  Description: #
  Author: #
  Author URI: #
  Text Domain: #
  Version:  1.0
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( !class_exists( 'Inpsyde_Plugin' ) ) {
  class Inpsyde_Plugin {
    
    /**
     * Register the routes for the objects of the controller.
    */
      public static function inpsyde_register_endpoint () {  
        // endpoints registration
        register_rest_route('endpoint/', 'inpsyde/', array(
          'methods' => 'GET',
          'callback' => array('Inpsyde_Plugin', 'inpsyde_callback'),
        ) );
      }

      public static function inpsyde_callback() {

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

    // Plugin action link 
    public static function inpsyde_plugin_action_link( $link ) {
        $link = array_merge( array(
            '<a href="' . esc_url( plugin_dir_url( __DIR__ ) . 'inpsyde-plugin/inpsyde-table.php' ) . '">' . __( 'URL', 'textdomain' ) . '</a>'
        ), $link );

      return $link;
    }
      
  }
  add_action('rest_api_init', array('Inpsyde_Plugin', 'inpsyde_register_endpoint' ));
}