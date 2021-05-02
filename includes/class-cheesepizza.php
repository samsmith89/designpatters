<?php
namespace DP\Includes;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class CheesePizza {
	public function prepare() {
		return "making cheese pizza";
	}

	public function cook() {
		return "cooking cheese pizza";
	}
}
