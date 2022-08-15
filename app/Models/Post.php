<?php

namespace App\Models;

use DateTime;

class Post extends Model {

    protected $table = 'posts';

    public function getDateCreation(): string
    {
        return (new DateTime($this->date_creation))->format('d/m/Y à H:i');
    }

    public function getExcerpt(): string
    {
        return substr($this->excerpt, 0, 200) . '...';
    }

    public function getButton(): string
    {
        return <<<HTML
        <a href="/posts/$this->id" class="btn btn-primary">Read it</a>
HTML;
    }

    public function getCategory()
    {
        return $this->query("
            SELECT c.* FROM categories c
            INNER JOIN post_in_category pic ON pic.categories_id = c.id
            WHERE pic.post_id = ?
        ", [$this->id]);
    }

    public function create(array $data, ?array $relations = null)
    {
        parent::create($data);

        $id = $this->db->getPDO()->lastInsertId();

        foreach ($relations as $categoryId) {
            $stmt = $this->db->getPDO()->prepare("INSERT post_in_category (post_id, categories_id) VALUES (?, ?)");
            $stmt->execute([$id, $categoryId]);
        }

        return true;
    }

    public function update(int $id, array $data, ?array $relations = null)
    {
        parent::update($id, $data);

        $stmt = $this->db->getPDO()->prepare("DELETE FROM post_in_category WHERE post_id = ?");
        $result = $stmt->execute([$id]);

        foreach ($relations as $categoryId) {
            $stmt = $this->db->getPDO()->prepare("INSERT post_in_category (post_id, categories_id) VALUES (?, ?)");
            $stmt->execute([$id, $categoryId]);
        }

        if ($result) {
            return true;
        }

    }
}