<?php

namespace Clevis\Utils;

/**
 * Functions proxy proxies calls to functions.
 */
class FunctionsProxy
{

	private $prefix;

	public function __construct($prefix = '')
	{
		$this->prefix = $prefix;
	}

	function __call($name, $arguments)
	{
		return call_user_func_array($this->prefix . $name, $arguments);
	}

}
