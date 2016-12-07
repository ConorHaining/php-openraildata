<?php

class NetworkRailTest extends PHPUnit_Framework_TestCase{

	public function testConstructor(){
		$username = "JohnDoe";
		$password = "Password123";
		$securityToken = "7f8cac09-f446-e51f-a324-c528843e36f5";
		print_r(get_declared_classes());
		$NR = new conorhaining\phpopenraildata\NetworkRail($username, $password, $securityToken);
		var_dump($NR);
		$this->assertEquals($NR->getUsername(), "JohnDoe");
		$this->assertEquals($NR->getPassword(), "Password123");
		$this->assertEquals($NR->getSecurityToken(), "7f8cac09-f446-e51f-a324-c528843e36f5");
	}
}