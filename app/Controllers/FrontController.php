<?php

namespace App\Controllers;

class FrontController
{
    public function home()
    {
        return $this->view('front.home');
    }

    public function index()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();
    }

    public function show(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);

        return $this->view('front.show');
    }

}
