<?php
namespace DP\Includes\Behaviors;

use DP\Includes\Interfaces\FlyBehavior;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class FlyWithWings implements FlyBehavior {
	public function fly() {
		return "I'm flying";
	}
}
