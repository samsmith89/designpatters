<?php
namespace DP\Includes\Coffees;

use DP;
use DP\Includes\Beverage;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class DarkRoast extends Beverage {

	public function __construct() {
		$this->description = 'Dark Roast Coffee';
	}

	public function cost() {
		return .99;
	}
}
