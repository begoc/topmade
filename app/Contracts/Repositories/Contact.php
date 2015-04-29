<?php

namespace Topmade\Contracts\Repositories;

interface Contact
{
    public function contact($user);

    public function update($id, array $data);
}
