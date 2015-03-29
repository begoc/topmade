<?php namespace Topmade\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest {

    public function getId()
    {
        return $this->get('id');
    }
}
