<?php

use conorhaining\phpopenraildata\NetworkRail;

class NetworkRailTest extends PHPUnit_Framework_TestCase{

	public function testConstructor(){
		$username = "JohnDoe";
		$password = "Password123";
		$securityToken = "7f8cac09-f446-e51f-a324-c528843e36f5";

		$NR = new NetworkRail($username, $password, $securityToken);

		$this->assertEquals($username, "JohnDoe");
		$this->assertEquals($password, "Password123");
		$this->assertEquals($securityToken, "7f8cac09-f446-e51f-a324-c528843e36f5");
	}
}