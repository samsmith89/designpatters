<?php
namespace DP;


//use DP\Includes;

/**
 * Creates the additional column on admin pages for page template name
 *
 * @since 1.0.0
 */

class ShareFacade {
	protected $twitter;
	protected $fb;
	protected $reddit;

	// The objects are injected to the constructor.
	function __construct($twitterObj,$fbObj,$redditObj)
	{
		$this->twitter = $twitterObj;
		$this->fb  = $fbObj;
		$this->reddit  = $redditObj;
	}

	// One function makes all the job of calling all the share methods
	//  that belong to all the social networks.
	function share($status)
	{
		return $this->twitter->tweet($status) . $this->fb->post($status) . $this->reddit->read($status);
	}
}
