<?php

namespace Topmade\Repositories;

use Illuminate\Support\Facades\Validator;
use Topmade\Contracts\Repositories\User as UserContract;
use Topmade\Models\User as Model;

class User implements UserContract
{

    public function create(array $data)
    {
        return Model::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function save($user, array $data)
    {
        $user = $this->getModel($user);

        $user->fill($data);

        return $user->save();
    }

    /**
     * @param $user
     * @return Model
     */
    private function getModel($user)
    {
        if ($user instanceof Model) {
            return $user;
        }

        return Model::find($user);
    }
}
