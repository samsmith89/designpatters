<?php
namespace DP\Includes\Ducks;

use DP\Includes\Behaviors\FlyNoWay;
use DP\Includes\Behaviors\Squeak;
use DP\Includes\Duck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class RubberDuck extends Duck {

	public function __construct() {
		// could pass in params to make decisions at runtime
		$this->setQuackBehavior( new Squeak() );
		$this->setFlyBehavior( new FlyNoWay() );
	}

	public function display() {
		return "I exist!!!";
	}
}
