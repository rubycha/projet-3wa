<?php
namespace App\Models;

class Category extends Model
{
    protected $table = 'categories';

    public function getPosts()
    {
        return $this->query("SELECT p.* FROM posts p INNER JOIN post_in_category pic ON pic.post_id = p.id WHERE pic.categories_id = ?", [$this->id]);
    }
}