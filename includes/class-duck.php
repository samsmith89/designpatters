<?php
namespace DP\Includes;

use DP;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

abstract class Duck {
	public $flyBehavior;
	public $quackBehavior;

	public function setFlyBehavior($flyBehavior) {
		$this->flyBehavior = $flyBehavior;
	}

	public function setQuackBehavior($quackBehavior) {
		$this->quackBehavior = $quackBehavior;
	}

	abstract public function display();

	public function performFly() {
		return $this->flyBehavior->fly();
	}

	public function performQuack() {
		return $this->quackBehavior->quack();
	}

	public function performSwim() {
		return 'all ducks float';
	}

}
