<?php

namespace Topmade\Validators;

use Illuminate\Support\Facades\Validator;
use Topmade\Commands\UpdateContact;
use Topmade\Contracts\Validator as ValidatorContract;
use Topmade\Exceptions\ValidatorException;

class UpdateContactValidator implements ValidatorContract
{
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'zip_code' => 'numeric',
            'phone' => 'regex:/\(\+?[0-9]{2}\) [0-9]{3,6} [0-9]{3,4} ?[0-9]{2,3}?$/'
        ]);
    }

    public function validate(UpdateContact $command)
    {
        $validator = $this->validator($command->contact());

        if ($validator->fails()) {
            throw new ValidatorException($validator);
        }
    }
}
