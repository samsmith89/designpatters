<?php
namespace DP\Includes;

use DP\Includes\Duck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class DecoyDuck extends Duck {

	public function display() {
		return "I exist!!!";
	}

	public function fly() {
		return "flying";
	}

	public function quack() {
		return "QUACK!!!";
	}
}
