<?php

namespace Topmade\Validators;

use Illuminate\Support\Facades\Validator;
use Topmade\Commands\StoreArticle;
use Topmade\Contracts\Validator as ValidatorContract;
use Topmade\Exceptions\ValidatorException;

class StoreArticleValidator implements ValidatorContract
{
    public function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|max:255',
            'icon' => 'required|max:255',
            'handler' => 'required|max:255'
        ]);
    }

    public function validate(StoreArticle $command)
    {
        $validator = $this->validator($command->article());

        if ($validator->fails()) {
            throw new ValidatorException($validator);
        }
    }
}
