<?php
namespace DP\Includes\Coffees;

use DP;
use DP\Includes\Beverage;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class Espresso extends Beverage {

	public function __construct() {
		$this->description = 'Espresso';
	}

	public function cost() {
		return .89;
	}
}
