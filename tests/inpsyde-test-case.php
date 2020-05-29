<?php
use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Brain\Monkey;

class Inpsyde_TestCase extends \PHPUnit\Framework\TestCase {
	
	// Integrating Mockery with PHPUnit
	use MockeryPHPUnitIntegration;

    private $instance;
	public function setUp(): void {
		parent::setUp();
		Monkey\setUp();
	}

	public function tearDown(): void {
		Monkey\tearDown();
		parent::tearDown();
	}
}