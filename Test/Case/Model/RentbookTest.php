<?php
App::uses('Rentbook', 'Model');

/**
 * Rentbook Test Case
 *
 */
class RentbookTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rentbook',
		'app.user',
		'app.book'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rentbook = ClassRegistry::init('Rentbook');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rentbook);

		parent::tearDown();
	}

}
