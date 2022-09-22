<?php

namespace App\Controllers\Admin; 

use App\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

class BackController extends Controller
{
    public function index()
    {
        $this->isAdmin();
        $posts =(new Post($this->getDB()))->all();
        return $this->view('back.boindex', compact('posts'));
    }

    public function create()
    {
        $this->isAdmin();
        $categories =(new Category($this->getDB()))->all();
        return $this->view('back.addarticle', compact('categories'));
    }

    public function createPost()
    {
        $this->isAdmin();
        $post = new Post($this->getDB());
        $categories = array_pop($_POST);
        $result = $post->create($_POST, $categories);
        
        if($result){
            return header('Location: /admin/posts');
        }
    }

    public function edit(int $id)
    {
        $this->isAdmin();
        $post = (new Post($this->getDB()))->findById($id);
        $categories =(new Category($this->getDB()))->all();
        return $this->view('back.editarticle', compact('post', 'categories'));
    }

    public function update(int $id)
    {
        $this->isAdmin();
        $post = new Post($this->getDB());
        $categories = array_pop($_POST);
        $result = $post->update($id, $_POST, $categories);

        if($result){
            return header('Location: /admin/posts');
        }
    }

    public function delete(int $id)
    {
        $this->isAdmin();
        $post = new Post($this->getDB());
        $result = $post->delete($id);

        if($result){
            return header('Location: /admin/posts');
        }

    }
}
