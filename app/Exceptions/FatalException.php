<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class FatalException extends Exception
{
    //
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 444, $previous);
    }
}
