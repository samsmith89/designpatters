<?php
namespace DP\Includes;

use DP;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class Base {

	protected static $_instance;

	public static function get_instance() {
		if ( ! self::$_instance instanceof self ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function __construct() {
		add_action('wp_footer', [ $this, 'testing'] );
	}

	public function testing() {
		echo 'something';
	}
}
