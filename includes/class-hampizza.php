<?php
namespace DP\Includes;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class HamPizza {
	public function prepare() {
		return "making ham pizza";
	}

	public function cook() {
		return "cooking ham pizza";
	}
}
