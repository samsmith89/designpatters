<?php
namespace DP\Includes;

use DP\Includes\Hoagies\ItalianHoagie;
use DP\Includes\Hoagies\VeggieHoagie;


/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class SandwichMaker {
	public $sub;

	public function __construct() {
		// This is where you change the duck at runtime. Pass it in as params
		$this->setSub(new VeggieHoagie() );
		$sub = $this->getSub();
		$sub->makeSandwich();
	}

	public function setSub($sub) {
		$this->sub = $sub;
	}

	public function getSub() {
		return $this->sub;
	}

	public function testSub($duck) {
		$flystr = $duck->performFly();
		$quackstr = $duck->performQuack();
		$display = $duck->display();
		$swim = $duck->performSwim();
		echo $flystr . $display . $quackstr . $swim;
	}

}
