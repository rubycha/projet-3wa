<?php

namespace App\Controllers;

use App\Models\Post;

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
        return $this->view('front.pagereview', compact('posts'));
    }

    public function articlereview(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);

        return $this->view('front.articlereview', compact('post'));
    }

    public function about()
    {
        $post = new Post($this->getDB());
        $posts = $post->findById($id);
        return $this->view('front.about', compact('posts'));
    }

    public function contact()
    {
        $post = new Post($this->getDB());
        $posts = $post->findById($id);
        return $this->view('front.contact', compact('posts'));
    }

    public function indexdrama()
    {
        $post = new Post($this->getDB());
        $posts = $post->findById($id);
        return $this->view('front.indexdrama', compact('posts'));
    }
}
