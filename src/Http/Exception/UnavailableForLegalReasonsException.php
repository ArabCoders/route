<?php

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class UnavailableForLegalReasonsException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Unavailable For Legal Reasons', Exception $previous = null, $code = 0)
    {
        parent::__construct(451, $message, $previous, [], $code);
    }
}
