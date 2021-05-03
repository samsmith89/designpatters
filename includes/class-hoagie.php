<?php
namespace DP\Includes;


/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

abstract class Hoagie {

	public function makeSandwich() {
		echo $this->cutBun();

		if ($this->customerWantsMeat()) {
			echo $this->addMeat();
		}

		if ($this->customerWantsCheese()) {
			echo $this->addCheese();
		}

		if ($this->customerWantsVegetables()) {
			echo $this->addVegetables();
		}

		if ($this->customerWantsCondiments()) {
			echo $this->addCondiments();
		}

		echo $this->wrapTheHoagie();
	}

	public function cutBun() {
		return "Hoagie is cut!";
	}

	public function wrapTheHoagie() {
		return "Wrapping up that beautiful sandwich!";
	}

	abstract function addMeat();
	abstract function addCheese();
	abstract function addVegetables();
	abstract function addCondiments();

	// These are the hooks to control this request in the concrete class
	public function customerWantsMeat() { return true; }
	public function customerWantsCheese() { return true; }
	public function customerWantsVegetables() { return true; }
	public function customerWantsCondiments() { return true; }
}
