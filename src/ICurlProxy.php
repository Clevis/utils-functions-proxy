<?php

namespace Clevis\Utils;

/**
 * Interface of `new FunctionsProxy('curl_')`.
 */
interface ICurlProxy
{

	/**
	 * @link http://php.net/manual/en/function.curl-init.php
	 * @param string $url [optional] <p>
	 * @return resource a cURL handle on success, false on errors.
	 */
	function init($url = null);

	/**
	 * @link http://php.net/manual/en/function.curl-copy-handle.php
	 * @param resource $ch
	 * @return resource a new cURL handle.
	 */
	function copy_handle($ch);

	/**
	 * @link http://php.net/manual/en/function.curl-version.php
	 * @param int $age [optional] <p>
	 * @return array an associative array with the following elements:
	 */
	function version($age = null);

	/**
	 * @link http://php.net/manual/en/function.curl-setopt.php
	 * @param resource $ch
	 * @param int $option <p>
	 * @param mixed $value <p>
	 * @return bool true on success or false on failure.
	 */
	function setopt($ch, $option, $value);

	/**
	 * @link http://php.net/manual/en/function.curl-setopt-array.php
	 * @param resource $ch
	 * @param array $options <p>
	 * @return bool true if all options were successfully set. If an option could
	 */
	function setopt_array($ch, array $options);

	/**
	 * @link http://php.net/manual/en/function.curl-exec.php
	 * @param resource $ch
	 * @return mixed true on success or false on failure. However, if the CURLOPT_RETURNTRANSFER
	 */
	function exec($ch);

	/**
	 * @link http://php.net/manual/en/function.curl-getinfo.php
	 * @param resource $ch
	 * @param int $opt [optional] <p>
	 * @return mixed If opt is given, returns its value as a string.
	 */
	function getinfo($ch, $opt = null);

	/**
	 * @link http://php.net/manual/en/function.curl-error.php
	 * @param resource $ch
	 * @return string the error message or '' (the empty string) if no
	 */
	function error($ch);

	/**
	 * @link http://php.net/manual/en/function.curl-errno.php
	 * @param resource $ch
	 * @return int the error number or 0 (zero) if no error
	 */
	function errno($ch);

	/**
	 * @link http://php.net/manual/en/function.curl-close.php
	 * @param resource $ch
	 * @return void
	 */
	function close($ch);

	/**
	 * @link http://php.net/manual/en/function.curl-multi-init.php
	 * @return resource a cURL multi handle resource on success, false on failure.
	 */
	function multi_init();

	/**
	 * @link http://php.net/manual/en/function.curl-multi-add-handle.php
	 * @param resource $mh
	 * @param resource $ch
	 * @return int 0 on success, or one of the CURLM_XXX errors
	 */
	function multi_add_handle($mh, $ch);

	/**
	 * @link http://php.net/manual/en/function.curl-multi-remove-handle.php
	 * @param resource $mh
	 * @param resource $ch
	 * @return int On success, returns a cURL handle, false on failure.
	 */
	function multi_remove_handle($mh, $ch);

	/**
	 * @link http://php.net/manual/en/function.curl-multi-select.php
	 * @param resource $mh
	 * @param float $timeout [optional] <p>
	 * @return int On success, returns the number of descriptors contained in,
	 */
	function multi_select($mh, $timeout = null);

	/**
	 * @link http://php.net/manual/en/function.curl-multi-exec.php
	 * @param resource $mh
	 * @param int $still_running <p>
	 * @return int A cURL code defined in the cURL Predefined Constants.
	 */
	function multi_exec($mh, &$still_running);

	/**
	 * @link http://php.net/manual/en/function.curl-multi-getcontent.php
	 * @param resource $ch
	 * @return string Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set.
	 */
	function multi_getcontent($ch);

	/**
	 * @link http://php.net/manual/en/function.curl-multi-info-read.php
	 * @param resource $mh
	 * @param int $msgs_in_queue [optional] <p>
	 * @return array On success, returns an associative array for the message, false on failure.
	 */
	function multi_info_read($mh, &$msgs_in_queue = null);

	/**
	 * @link http://php.net/manual/en/function.curl-multi-close.php
	 * @param resource $mh
	 * @return void
	 */
	function multi_close($mh);

}
