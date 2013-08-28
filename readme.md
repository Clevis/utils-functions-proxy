# Functions Proxy

## Usage

	/** @var ICurlProxy $curl */
	$curl = new FunctionsProxy('curl_');

	$handle = $curl->init();
	$curl->setopt($handle, CURLOPT_URL, 'example.com');
	$curl->setopt($handle, CURLOPT_RETURNTRANSFER, 1);
	$response = $curl->exec($handle);
	$curl->close();

## Why

Because unlike built-in functions, this proxy could be mocked in tests.
