<?php
namespace DP\Includes;

use DP\Includes\Ducks\MallardDuck;
use DP\Includes\Ducks\RubberDuck;
use DP\Includes\Ducks\DecoyDuck;
use DP\Includes\Ducks\RedheadDuck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class DuckSimulator {
	public $duck;

	public function __construct() {
		// This is where you change the duck at runtime. Pass it in as params
		$this->setDuck(new DecoyDuck() );
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
		$display = $duck->display();
		$swim = $duck->performSwim();
		echo $flystr . $display . $quackstr . $swim;
	}

}
