<?php

namespace Controllers;

class BackController
{
    protected function displayAddArticle()
    {
        $view = 'back/addarticle.php';
        include_once 'views/layout.php';
    }
    protected function displayAddPage()
    {
        $view = 'back/addpage.php';
        include_once 'views/layout.php';
    }
    public function displayBoArticles()
    {
        $view = 'back/boarticles.php';
        include_once 'views/layout.php';
    }
    public function displayBoComments()
    {
        $view = 'back/bocomments.php';
        include_once 'views/layout.php';
    }
    public function displayHome()
    {
        $view = 'back/boindex.php';
        include_once 'views/layout.php';
    }
    public function displayBoPages()
    {
        $view = 'back/bopages.php';
        include_once 'views/layout.php';
    }
    public function displayBoUsers()
    {
        $view = 'back/bousers.php';
        include_once 'views/layout.php';
    }
    public function displayEditArticle()
    {
        $view = 'back/editarticle.php';
        include_once 'views/layout.php';
    }
    public function displayEditPages()
    {
        $view = 'back/editpages.php';
        include_once 'views/layout.php';
    }
}