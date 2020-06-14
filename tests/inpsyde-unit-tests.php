<?php
use Brain\Monkey\Functions;

class Inpsyde_Unit_Tests extends \Inpsyde_TestCase  {
    
    /**
	 * @var Inpsyde_Plugin
	 */
    private $instance;
    
    /**
	 * class Inpsyde_Plugin
	 */
    public function test_init(){
        $this->instance = Mockery::mock( Inpsyde_Plugin::class )
        ->makePartial();

        $func = $this->instance::init();
        $this->assertTrue( has_action('wp_enqueue_scripts', $func, 20) );
    }

    /**
	 * class Inpsyde_Shortcode
	 */
    public function test_shortcode(){  
        Brain\Monkey\Functions\expect('add_shortcode')
        ->with('inpsyde_shortcode', array('Inpsyde_Shortcode', 'shortcode' ));

        ( new Inpsyde_Shortcode() )::init();
    }

    /**
	 * class Inpsyde_REST_API
	 */
    public function test_rest_api_init() {
        $request = $this->getMockBuilder( 'ArrayAccess' )
        ->setMockClassName( 'WP_REST_Request' )
        ->getMock();

        Brain\Monkey\Functions\expect('register_rest_route')
        ->atLeast()->once()
        ->with('endpoint/', 'inpsyde/', array(
            'methods' => 'GET',
            'callback' => array('Inpsyde_REST_API', 'callback'),
        ) );

        $this->assertTrue( class_exists( 'WP_REST_Request' ) );

        ( new Inpsyde_REST_API() )::init();
    }

    /**
	 * class Inpsyde_REST_API
	 */
    public function test_rest_api_callback() {

        Brain\Monkey\Functions\expect('wp_cache_get')
        ->once()
        ->with('inpsyde-key');
       
       Brain\Monkey\Functions\expect('wp_remote_get')
        ->once()
        ->with('https://jsonplaceholder.typicode.com/users/', array( 'timeout' => 10 ) );
   
        ( new Inpsyde_REST_API() )::callback();
    } 
}