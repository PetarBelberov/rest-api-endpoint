<?php
/*
 * This file is part of the REST API Endpoint WordPress plugin.
 *
 * (c) Petar Belberov <petar_belberov@gmx.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * PHPUnit bootstrap file REST API Endpoint plugin
 *
 */

define( 'ABSPATH', true );

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
require_once 'inpsyde-test-case.php';