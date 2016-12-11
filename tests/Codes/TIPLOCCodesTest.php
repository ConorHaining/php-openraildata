<?php

use OpenRail\NetworkRail\Codes\TIPLOCCodes;

class TIPLOCCodesTest extends PHPUnit_Framework_TestCase{

	public function testLookup1(){
		// Lookup code for "LONDON BRIDGE"
		$code = TIPLOCCodes::lookup("LNDNBDG");
		$this->assertEquals("LONDON BRIDGE", $code);
	}

	public function testLookup2(){
		// Lookup code for "GLASGOW QUEEN STREET"
		$code = TIPLOCCodes::lookup("GLGQHL");
		$this->assertEquals("GLASGOW QUEEN STREET", $code);
	}

	public function testLookup3(){
		// Lookup code for non existing location
		$code = TIPLOCCodes::lookup("ABCDEF");
		$this->assertNull($code);
	}
}