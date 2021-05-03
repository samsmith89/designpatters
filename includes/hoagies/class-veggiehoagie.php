<?php
namespace DP\Includes\Hoagies;


use DP\Includes\Hoagie;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class VeggieHoagie extends Hoagie {
	public $vegetablesUsed = [ 'Lettuce', 'Tomato', 'Onions', 'Sweet Peppers'];
	public $condimentsUsed = [ 'Oil', 'Vinegar'];

	public function customerWantsMeat() { return false; }
	public function customerWantsCheese() { return false; }

	function addMeat() { }

	function addCheese() { }

	function addVegetables() {
		$vegetables = '';
		foreach ($this->vegetablesUsed as $vegetable) {
			$vegetables = $vegetables . ' ' . $vegetable;
		}
		return $vegetables;
	}

	function addCondiments() {
		$condiments = '';
		foreach ($this->condimentsUsed as $condiment) {
			$condiments = $condiments . ' ' . $condiment;
		}
		return $condiments;
	}
}
