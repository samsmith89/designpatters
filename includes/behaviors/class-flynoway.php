<?php
namespace DP\Includes\Behaviors;

use DP\Includes\Interfaces\FlyBehavior;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class FlyNoWay implements FlyBehavior {
	public function fly() {
		return "I can't fly!";
	}
}
