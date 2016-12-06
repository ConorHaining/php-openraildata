<?php

namespace conorhaining/php-openraildata;


/**
* Superclass to connect to the Network Rail data feeds
*
* @author Conor Haining <conor.haining@gmail.com>
* @package conorhaining/php-openraildata
* @since 0.0.1-dev
*/
class NetworkRail{
	
	const SCHEME = "tcp";
	const HOST = "datafeeds.networkrail.co.uk";
	const PORT = 61618;

	/**
	* @var string Network Rail data feed username
	*/
	protected $username;

	/**
	* @var string Network Rail data feed password
	*/
	protected $password;
	
	/**
	* @var string Network Rail data feed security token
	*/
	protected $securityToken;

	/**
	* Constructor for NetworkRail 
	* 
	* @param string $username Network Rail data feed username
	* @param string $password Network Rail data feed password
	* @param string $securityToken Network Rail data feed security token
	*/
	function __construct($username, $password, $securityToken){
		$this->username = $username;
		$this->password = $password;
		$this->securityToken = $securityToken;
	}
}