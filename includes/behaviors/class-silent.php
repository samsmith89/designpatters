<?php
namespace DP\Includes\Behaviors;

use DP\Includes\Interfaces\QuackBehavior;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class Silence implements QuackBehavior {

	public function quack() {
		return "**silence**";
	}

}
