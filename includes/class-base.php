<?php
namespace DP\Includes;

use DP\Includes\DuckSimulator;
use DP\Includes\MallardDuck;

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
		add_action('the_content', [ $this, 'execute'] );
	}

	public function execute() {
		?>
		<div class="dp-output" style="margin: 0 auto;">
			<p>
				<?php
					$duck = new DuckSimulator();
					$duck->testDuck();
				?>
			</p>
		</div>
		<?php
	}
}
