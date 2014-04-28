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
        $newsModel = new News_Model;
          
        //get an article
        $article = $newsModel->get_article($getVars['article']);
          
        //create a new view and pass it our template
        $view = new View_Model($this->template);
          
        //assign article data to view
        $view->assign('title' , $article['title']);
        $view->assign('content' , $article['content']);
    }
}