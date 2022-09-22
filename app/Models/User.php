<?php 
namespace App\Models;

class User extends Model{
    protected $table ='user';

    public function getByUsername(string $username): User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);
    }
}