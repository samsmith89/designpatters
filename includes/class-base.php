<?php
namespace DP\Includes;

use DP\Includes\Socials\FB;
use DP\Includes\Socials\Reddit;
use DP\Includes\Socials\Twitter;

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
				$twitterObj = new Twitter();
				$fbObj   = new FB();
				$redditObj  = new Reddit();

				// Pass the objects to the class facade object.
				$shareObj = new shareFacade($twitterObj,$fbObj,$redditObj);

				// Call only 1 method to share your post with all the social networks.
				echo $shareObj->share('Yeah!!!');

				?>
			</p>
		</div>
		<?php
	}
}
