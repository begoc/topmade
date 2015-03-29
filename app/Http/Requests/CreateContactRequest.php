<?php namespace Topmade\Http\Requests;


use Illuminate\Contracts\Auth\Guard;

class CreateContactRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @param Guard $auth
	 * @return bool
	 */
	public function authorize(Guard $auth)
	{
		return $auth->user()->id == $this->get('user');
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
			'email' => 'required'
		];
	}

}
