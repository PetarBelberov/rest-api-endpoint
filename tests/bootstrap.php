<?php
/**
 * PHPUnit bootstrap file
 *
 */

define( 'ABSPATH', true );

define( 'DB_NAME', 'inpsyde' );
define( 'DB_USER', 'inpsyde_user' );
define( 'DB_PASSWORD', 'inpsyde_pass' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

if ( class_exists( 'opcache_reset' ) ) {
	opcache_reset();
}

define( 'INPSYDE__PLUGIN_DIR', sys_get_temp_dir() . '/wp-content/plugins/inpsyde-plugin-task/' );

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Now we include any plugin files that we need to be able to run the tests. This
 * should be files that define the functions and classes you're going to test.
 */

require_once 'class.inpsyde.php';
require_once 'class.inpsyde-shortcode.php';
require_once 'class.inpsyde-rest-api.php';
require_once 'class.inpsyde-admin.php';
require_once 'inpsyde-test-case.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);