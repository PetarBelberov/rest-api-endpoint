<?php
/*
  Plugin Name: REST API Endpoint
  Plugin URI: https://github.com/PetarBelberov/rest-api-endpoint
  Description: The plugin sends an HTTP request to a REST API endpoint and parses the JSON response using it to build and display an HTML table. Shortcode: <strong>[inpsyde_shortcode]</strong>
  Author: Petar Belberov
  Author URI: https://github.com/PetarBelberov
  Version:  1.0
  License: GPL3
 */

// Don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'REST API Endpoint WordPress Plugin';
	exit;
}

define( 'INPSYDE__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( INPSYDE__PLUGIN_DIR . 'class.inpsyde.php' );
require_once( INPSYDE__PLUGIN_DIR . 'class.inpsyde-rest-api.php' );
require_once( INPSYDE__PLUGIN_DIR . 'class.inpsyde-shortcode.php' );

add_action( 'init', array( 'Inpsyde_Plugin', 'init' ) );
add_action('rest_api_init', array('Inpsyde_REST_API', 'init' ));
add_action( 'init', array( 'Inpsyde_Shortcode', 'init' ) );