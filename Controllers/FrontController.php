<?php

namespace Controllers;

class FrontController
{
    public function displayHome()
    {
        $view = 'front/home.php';
        include_once 'views/layout.php';
    }
    public function displayIndex()
    {
        $view = 'front/indexdrama.php';
        include_once 'views/layout.php';
    }
    public function displayReviews()
    {
        $view = 'front/pagereviews.php';
        include_once 'views/layout.php';
    }
    public function displayReview()
    {
        $view = 'front/articlereview.php';
        include_once 'views/layout.php';
    }
    public function displayContact()
    {
        $view = 'front/contact.php';
        include_once 'views/layout.php';
    }
    public function displayAbout()
    {
        $view = 'front/about.php';
        include_once 'views/layout.php';
    }

    public function displayAdmin()
    {
        $view = 'back/boindex.php';
        include_once 'views/layout.php';
    }

}