<?php

namespace Topmade\Contracts\Repositories;

interface Contact extends Repository
{
    public function contact($user);

    public function update($id, array $data);
}
