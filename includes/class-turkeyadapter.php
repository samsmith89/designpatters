<?php
namespace DP\Includes;

use DP\Includes\Interfaces\Duck;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class TurkeyAdapter implements Duck{
	public $turkey;

	public function __construct($turkey) {
		$this->setTurkey($turkey);
	}

	public function setTurkey($turkey) {
		$this->turkey = $turkey;
	}

	public function getTurkey() {
		return $this->turkey;
	}

	public function fly() {
		$turkeystr = '';
		for ( $i = 5; $i > 0; $i--) {
			$turkeystr = $turkeystr . $this->turkey->fly();
		}
		return $turkeystr;
	}

	public function quack() {
		return $this->turkey->gobble();
	}

}
