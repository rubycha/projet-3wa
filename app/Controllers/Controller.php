<?php

namespace App\Controllers;

use Database\DBConnection;

abstract class Controller{

    protected $db;

    public function __construct(DBConnection $db)
    {
        if (session_status() === PHP_SESSION_NONE){
            session_start();
        }

        $this->db = $db;
    }
    
}