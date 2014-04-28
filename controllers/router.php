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

//
//This is the router that delivers the correct files based on the uri
//----------------------------------------------------------------------

//Fetch the page request from the URL (E.G. Everything after the '?')
$request = $_SERVER['QUERY_STRING'];

//Parse the page request and other GET variables separated by the '&' delimiter, and placed in an array.
$parsed = explode('&' , $request);

//The page is the first element of parsed request.
$page = array_shift($parsed);

//Pars the rest of the get statements in the array.
$getVars = array();
foreach ($parsed as $argument) {
	//Split GET vars along '=' symbol to creat an array of [$variables] = $values
    list($variable , $value) = split('=' , $argument);
    $getVars[$variable] = $value;
}

//this is a test , and we will be removing it later
echo "The page your requested is '$page'";
echo '<br/>';
$vars = print_r($getVars, TRUE);
echo "The following GET vars were passed to the page:<pre>".$vars."</pre>";