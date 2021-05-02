<?php
namespace DP\Includes\Ducks;

use DP\Includes\Behaviors\FlyNoWay;
use DP\Includes\Behaviors\Silence;
use DP\Includes\Duck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class DecoyDuck extends Duck {

	public function __construct() {
		// could pass in params to make decisions at runtime
		$this->setQuackBehavior( new Silence() );
		$this->setFlyBehavior( new FlyNoWay() );
	}

	public function display() {
		return "I exist!!!";
	}
}
