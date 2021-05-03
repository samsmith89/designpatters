<?php
namespace DP\Includes\Coffees;

use DP;
use DP\Includes\Beverage;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class Decaf extends Beverage {

	public function __construct() {
		$this->description = 'Decaf Coffee';
	}

	public function cost() {
		return 1.09;
	}
}
