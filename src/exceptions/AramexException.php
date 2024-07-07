<?php

namespace Aboodma\AramexIntegration\Exceptions;

use Exception;

class AramexException extends Exception
{
    protected $httpStatusCode;
    protected $errorDetails;

    public function __construct($message, $httpStatusCode = 0, $errorDetails = [])
    {
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
        $this->errorDetails = $errorDetails;
    }

    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    public function getErrorDetails()
    {
        return $this->errorDetails;
    }
}
