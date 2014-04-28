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
 * This file handles the retrieval and serving of news articles
 */
class News_Controller
{
    /**
     * This template variable will hold the 'view' portion of our MVC for this 
     * controller
     */
    public $template = 'news';
                  
    /**
     * This is the default function that will be called by router.php
     * 
     * @param array $getVars the GET variables posted to index.php
     */
    public function main(array $getVars)
    {
        //this is a test , and we will be removing it later
        print "We are in news!";
        print '<br/>';
        $vars = print_r($getVars, TRUE);
        print
        (
            "The following GET vars were passed to this controller:" .
            "<pre>".$vars."</pre>"
        );
    }
}