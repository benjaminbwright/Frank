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
* Define Document Paths
*/

// Add SERVER_ROOT
// This enables internally referencing files relative to the root directory.
define('SERVER_ROOT' , '/var/www/frank');

// Add SITE_ROOT
// This enables externally referencing files relative to the root directory.
// E.G. photos, videos, js, css, etc.
define('SITE_ROOT' , 'http://localhost/frank');

/**
* Fetch The Router
*/

require_once(SERVER_ROOT . '/controllers/' . 'router.php');
