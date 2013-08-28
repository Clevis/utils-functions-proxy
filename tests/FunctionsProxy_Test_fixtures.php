<?php

function FunctionsProxy_Test_someFunction()
{
	return 'return from someFunction';
}

function FunctionsProxy_Test_someFunctionWithParameters($a, $b)
{
	return func_get_args();
}
