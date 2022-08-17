<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;

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
        return $this->view('front.pagereviews', compact('posts'));
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
        return $this->view('front.about', compact('post', 'about'));
    }

    public function contact()
    {
        $post = new Post($this->getDB());
        $posts = $post->findById($id);
        return $this->view('front.contact', compact('post', 'contact'));
    }

    public function indexdrama()
    {
        $post = new Post($this->getDB());
        $posts = $post->findById($id);
        return $this->view('front.indexdrama', compact('post', 'index'));
    }
}
