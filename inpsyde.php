<?php
/*
  Plugin Name: Inpsyde REST API Endpoint
  Plugin URI: #
  Description: Shortcode: [inpsyde_shortcode]
  Author: #
  Author URI: #
  Text Domain: #
  Version:  1.0
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

if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
	require_once( INPSYDE__PLUGIN_DIR . 'class.inpsyde-admin.php' );
	add_action( 'init', array( 'Inpsyde_Admin', 'init' ) );
}