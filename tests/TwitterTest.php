<?php

namespace PluginTests;

use DP\Socials\Twitter;
use PHPUnit\Framework\TestCase;

class TwittersTest extends TestCase {
	public function test_shouldWork() {
		$twitter = new Twitter();
		$status = "totes";
		$twitter->tweet($status);
		$this->assertEquals('totes', $twitter->tweet($status));
	}
}
