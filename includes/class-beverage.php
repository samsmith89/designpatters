<?php
namespace DP\Includes;

use DP;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

abstract class Beverage {
	public $description;

	public function getDescription() {
		return $this->description;
	}

	abstract public function cost();
}
