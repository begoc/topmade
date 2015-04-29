<?php

namespace Topmade\Contracts\Repositories;

interface User
{
    public function create(array $data);

    public function save($user, array $data);
}
