<?php

namespace conorhaining\phpopenraildata;


/**
* Superclass to connect to the Network Rail data feeds
*
* @author Conor Haining <conor.haining@gmail.com>
* @package conorhaining/php-openraildata
* @since 0.0.1-dev
* @see http://nrodwiki.rockshore.net/index.php/About_the_feeds
*/
class NetworkRail{
	
	const SCHEME = "tcp";
	const HOST = "datafeeds.networkrail.co.uk";
	const PORT = 61618;

	/**
	* @var string Network Rail data feed username
	*/
	private $username;

	/**
	* @var string Network Rail data feed password
	*/
	private $password;
	
	/**
	* @var string Network Rail data feed security token
	*/
	private $securityToken;

	/**
	* @var conorhaining\phpopenraildata\NetworkRail\Stomp An instance of the Stomp messaging client
	*/
	private $stomp
;
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

	/**
	* Accessor method for username
	*
	* @return string|null Network Rail data feed username
	*/
	public function getUsername(){
		return $this->username;
	}
	
	/**
	* Accessor method for password
	*
	* @return string|null Network Rail data feed username
	*/
	public function getPassword(){
		return $this->password;
	}

	/**
	* Accessor method for username
	*
	* @return string|null Network Rail data feed username
	*/
	public function getSecurityToken(){
		return $this->securityToken;
	}

}