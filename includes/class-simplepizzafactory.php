<?php
namespace DP\Includes;


/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class SimplePizzaFactory {
//	public $type;
//
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

	public function createPizza($type) {
		if ($type === 'cheese') {
			$pizza =  new CheesePizza();
		}
		if ($type === 'ham') {
			$pizza =  new HamPizza();
		}
		return $pizza;
	}
}
