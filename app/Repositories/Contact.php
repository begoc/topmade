<?php

namespace Topmade\Repositories;

use Illuminate\Support\Facades\Validator;
use Topmade\Contracts\Repositories\Contact as ContactContract;
use Topmade\Models\Contact as Model;
use Topmade\Models\User;

class Contact implements ContactContract
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'zip_code' => 'numeric',
            'phone' => 'regex:/\(\+?[0-9]{2}\) [0-9]{3,6} [0-9]{3,4} ?[0-9]{2,3}?$/'
        ]);
    }

    /**
     * Get a contact instance.
     *
     * @param User $user
     * @return Model
     */
    public function contact($user)
    {
        return ($user->contact) ?: $this->newContact(['user_id' => $user->id]);
    }

    /**
     * Create a new contact instance after a valid registration.
     *
     * @param $id
     * @param  array $data
     * @return Model
     */
    public function update($id, array $data)
    {
        $contact = $this->findOrNew($id, [
            'user_id' => array_get($data, 'user'),
            'address' => array_get($data, 'address'),
            'zip_code' => array_get($data, 'zip_code'),
            'city' => array_get($data, 'city'),
            'country' => array_get($data, 'country'),
            'phone' => array_get($data, 'phone'),
            'fax' => array_get($data, 'fax')
        ]);

        return $contact->save();
    }

    /**
     * @param $id
     * @param array $attributes
     * @return Model
     */
    private function findOrNew($id, array $attributes)
    {
        $contact = Model::find($id);

        if (! is_null($contact)) {
            $contact->fill($attributes);

            return $contact;
        }

        return $this->newContact($attributes);
    }

    /**
     * @param array $attributes
     * @return Model
     */
    private function newContact(array $attributes)
    {
        $contact = new Model($attributes);
        $contact->user_id = $attributes['user_id'];

        return $contact;
    }
}
