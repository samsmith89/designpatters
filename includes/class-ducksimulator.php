<?php
namespace DP\Includes;

use DP\Includes\Ducks\MallardDuck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class DuckSimulator {
	public $duck;

	public function __construct() {
		$this->setDuck(new MallardDuck());
		$duck = $this->getDuck();
		$this->testDuck($duck);
	}

	public function setDuck($duck) {
		$this->duck = $duck;
	}

	public function getDuck() {
		return $this->duck;
	}

	public function testDuck($duck) {
		$flystr = $duck->performFly();
		$quackstr = $duck->performQuack();
		$words = "what";
		echo $flystr . $words . $quackstr;
	}

}
