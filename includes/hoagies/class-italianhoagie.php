<?php
namespace DP\Includes\Hoagies;


use DP\Includes\Hoagie;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class ItalianHoagie extends Hoagie {
	public $meatUsed = [ 'Salami', 'Pepperoni', 'Capicola Ham'];
	public $cheeseUsed = [ 'Provolone'];
	public $vegetablesUsed = [ 'Lettuce', 'Tomato', 'Onions', 'Sweet Peppers'];
	public $condimentsUsed = [ 'Oil', 'Vinegar'];

	function addMeat() {
		$meats = '';
		foreach ($this->meatUsed as $meat) {
			$meats = $meats . ' ' . $meat;
		}
		return $meats;
	}

	function addCheese() {
		$cheeses = '';
		foreach ($this->cheeseUsed as $cheese) {
			$cheeses = $cheeses . ' ' . $cheese;
		}
		return $cheeses;
	}

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
