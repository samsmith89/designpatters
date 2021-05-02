<?php
namespace DP\Includes;

use DP\Includes\SimplePizzaFactory;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class Pizza {
//	public $type;
//	public function __construct($type) {
//		$this->setType($type);
//	}
//
//	public function setType($type) {
//		$this->type = $type;
//	}
//
//	public function getType() {
//		return $this->type;
//	}

	public function orderPizza($type) {
		$factory = new SimplePizzaFactory();
		//factory get
		$pizza = $factory->createPizza($type);
		$prepstring = $pizza->prepare();
		$cookstring = $pizza->cook();
		$words = "Let's eat!!!";
		return $prepstring . $cookstring . $words;
	}
}
