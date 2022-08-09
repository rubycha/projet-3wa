<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class NotFoundExcpetion extends Exception{
    public function __construct($message="", $code=0, ?Throwble $previous=null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function error404()
    {
        http_response_code(404);
        require VIEWS . 'errors/404.php';
    }
}