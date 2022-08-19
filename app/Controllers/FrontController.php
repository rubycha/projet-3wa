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

    public function pagereviewdynamique()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();
        return $this->view('front.pagereviewdynamique', compact('posts'));
    }

    public function articlereview(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);

        return $this->view('front.articlereview', compact('post'));
    }

    public function about()
    {
        return $this->view('front.about', compact('about'));
    }

    public function contact()
    {
        
        return $this->view('front.contact', compact('contact'));
    }

    public function indexdrama()
    {
        return $this->view('front.indexdrama', compact('indexdrama'));
    }
}
