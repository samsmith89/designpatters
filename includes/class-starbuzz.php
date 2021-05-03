<?php
namespace DP\Includes;

use DP;
use DP\Includes\Coffees\DarkRoast;
use DP\Includes\Coffees\HouseBlend;
use DP\Includes\Coffees\Decaf;
use DP\Includes\Coffees\Espresso;
use DP\Includes\Decorators\Whip;
use DP\Includes\Decorators\Mocha;
use DP\Includes\Decorators\Soy;
use DP\Includes\Decorators\Milk;


/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class StarBuzz {
	public $beverage;

	public function __construct() {
		$beverage = new HouseBlend();
		$beverage = new Whip($beverage);
		$beverage = new Mocha($beverage);
		$beverage = new Mocha($beverage);
		$beverage = new Milk($beverage);
		echo $beverage->getDescription() . $beverage->cost();
	}
}
