<?php
namespace DP\Includes;

use DP\Includes\Interfaces\Duck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class MallardDuck implements Duck {
	public function fly() {
		echo "flying";
	}

	public function quack() {
		echo "QUACK!!!";
	}
}
