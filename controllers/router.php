<?php

/**
 * Frank: A simple PHP5 MVC framework.
 *
 * @package    Frank
 * @version    0.1.0
 * @author     Benjamin Wright
 * @license    MIT License
 * @copyright  2014 Benjamin Wright
 * @link       http://www.benjaminbwright.com
 */

/**
 * The Router routes all incoming requests to the appropriate controller
 */

//Fetch the page request from the URL (E.G. Everything after the '?')
$request = $_SERVER['QUERY_STRING'];

//Parse the page request and other GET variables separated by the '&' delimiter, and placed in an array.
$parsed = explode('&' , $request);

//The page is the first element of parsed request.
$page = array_shift($parsed);

//Pars the rest of the get statements in the array.
$getVars = array();
foreach ($parsed as $argument) 
{
	//Split GET vars along '=' symbol to creat an array of [$variables] = $values
    list($variable , $value) = split('=' , $argument);
    $getVars[$variable] = $value;
}

//Calculate the path to the file as $target
$target = SERVER_ROOT . '/controllers/' . $page . '.php';

//Get the target file if it exists
if (file_exists($target)) 
{
	include_once($target);

	//Modify the page to fit the '_Controller' naming convention
	$class = ucfirst($page) . '_Controller';

	//Instatiate the target class
	if (class_exists($class))
	{
		$controller = new $class;
	}
	else
	{
		//Maybe the name was wrong?
		//Send an error message.
		die('Class does not exist!');
	}
}
else
{
	//The router can't find the file in 'controllers'!
	die('Page does not exist!');
}

//Execute the default function of the instantiated contoller
//Pass GET variables to the main method
$controller->main($getVars);