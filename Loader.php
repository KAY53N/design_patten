<?php
function __autoload($class)
{
	if (class_exists($class, false) || interface_exists($class, false))
	{
    	return;
	}

	if ((null !== ROOT_PATH) && !is_string(ROOT_PATH) && !is_array(ROOT_PATH))
	{
    	throw new Exception('Directory argument must be a string or an array');
	}

    // autodiscover the path from the class name
	$file = ROOT_PATH.DIRECTORY_SEPARATOR.str_replace('_', DIRECTORY_SEPARATOR, $class) . '.class.php';
	
	include $file;
}