<?php

namespace Clevis\Utils;

require_once __DIR__ . '/../src/FunctionsProxy.php';
require_once __DIR__ . '/FunctionsProxy_Test_fixtures.php';

class FunctionsProxy_Test extends \PHPUnit_Framework_TestCase
{

	public function testCallsFunctionsWithGivenPrefix()
	{
		$proxy = new FunctionsProxy('FunctionsProxy_Test_');
		$this->assertSame('return from someFunction', $proxy->someFunction());
		$this->assertSame([1, 2, 3, 4, 5], $proxy->someFunctionWithParameters(1, 2, 3, 4, 5));
	}

}
