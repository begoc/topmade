<?php

namespace Topmade\Exceptions;

use Exception;
use Illuminate\Contracts\Validation\Validator;

class ValidatorException extends Exception
{
    /**
     * @var Validator
     */
    private $validator;

    public function __construct(Validator $validator, $message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($validator->getMessageBag(), $code, $previous);

        $this->validator = $validator;
    }

    /**
     * @return Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }
}
