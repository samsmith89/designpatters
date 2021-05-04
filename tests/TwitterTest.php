<?php

use \DP\Socials\Twitter;

class TwitterTest extends \PHPUnit\Framework\TestCase
{
	public function test_shouldWork()
	{
		$twitter = new Twitter();
		$status = "totes";
		$twitter->tweet($status);
		$this->assertEquals('totes', $twitter->tweet($status));
	}
}
