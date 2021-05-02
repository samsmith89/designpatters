<?php
namespace DP\Includes\Ducks;

use DP\Includes\Behaviors\FlyWithWings;
use DP\Includes\Behaviors\Quack;
use DP\Includes\Duck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class RedheadDuck extends Duck {

	public function __construct() {
		// could pass in params to make decisions at runtime
		$this->setQuackBehavior( new Quack() );
		$this->setFlyBehavior( new FlyWithWings() );
	}

	public function display() {
		return "I exist!!!";
	}
}
