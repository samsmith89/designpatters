<?php
namespace DP\Includes;

use DP;
use DP\Includes\Coffees\DarkRoast;
use DP\Includes\Decorators\Whip;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class StarBuzz {
	public $beverage;

	public function __construct() {
		$beverage = new DarkRoast();
		$beverage = new Whip($beverage);
		echo $beverage->getDescription() . $beverage->cost();
	}
}
