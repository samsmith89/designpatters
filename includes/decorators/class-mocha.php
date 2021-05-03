<?php
namespace DP\Includes\Decorators;

use DP;
use DP\Includes\CondimentDecorator;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class Mocha extends CondimentDecorator {
	public $beverage;

	public function __construct($beverage) {
		$this->beverage = $beverage;
	}

	public function getDescription() {
		return $this->beverage->getDescription() . ", mocha";
	}

	public function cost() {
		return $this->beverage->cost() + .12;
	}
}