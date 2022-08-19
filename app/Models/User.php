<?php 
namespace App\Models;
use App\Controllers\UserController;

class User extends Model{
    protected $table ='users';

    public function getByUsername(string $username): getByUsername
    {
        return $this->query("SELECT * FROM {$this->table}WHERE username = ?", [$username], true);
    }
}