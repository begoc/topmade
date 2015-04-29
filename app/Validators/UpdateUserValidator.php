<?php

namespace Topmade\Validators;

use Illuminate\Support\Facades\Validator;
use Topmade\Commands\UpdateContact;
use Topmade\Contracts\Validator as ValidatorContract;
use Topmade\Exceptions\ValidatorException;

class UpdateUserValidator implements ValidatorContract
{
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
        ]);
    }

    /**
     * @param UpdateContact $command
     * @throws ValidatorException
     */
    public function validate(UpdateContact $command)
    {
        $validator = $this->validator($command->user());

        if ($validator->fails()) {
            throw new ValidatorException($validator);
        }
    }
}
