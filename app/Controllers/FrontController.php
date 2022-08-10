<?php

namespace App\Controllers;

class FrontController extends Controller
{
    public function home()
    {
        return $this->view('front.home');
    }

    public function pagereview()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();
    }

    public function articlereview(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);

        return $this->view('front.articlereview');
    }
}
