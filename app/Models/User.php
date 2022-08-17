<?php 
namespace App\Models;

class User extends Model{
    protected $table ='users';

    public function getByUsername(string $username): getByUsername
    {
        return $this->query("SELECT * FROM {$this->table}WHERE username = ?", [$username], true);
    }
}