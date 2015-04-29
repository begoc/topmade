<?php

namespace Topmade\Validators;

use Illuminate\Support\Facades\Validator;
use Topmade\Commands\UserRegister;
use Topmade\Contracts\Validator as ValidatorContract;
use Topmade\Exceptions\ValidatorException;

class UserRegisterValidator implements ValidatorContract
{
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    public function validate(UserRegister $command)
    {
        $validator = $this->validator($command->userToRegister());

        if ($validator->fails()) {
            throw new ValidatorException($validator);
        }
    }
}
