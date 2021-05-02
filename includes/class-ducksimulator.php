<?php
namespace DP\Includes;

use DP\Includes\MallardDuck;

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

		$this->setDuck(new WildTurkey());
		$turkeyadapter = new TurkeyAdapter($this->getDuck());
		$this->testDuck($turkeyadapter);
	}

	public function setDuck($duck) {
		$this->duck = $duck;
	}

	public function getDuck() {
		return $this->duck;
	}

	public function testDuck($duck) {
		$flystr = $duck->fly();
		$quackstr = $duck->quack();
		$words = "what";
		echo $flystr . $words . $quackstr;
	}

}
