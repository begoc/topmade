<?php

namespace Topmade\Contracts\Repositories;

interface Section extends Repository
{
    public function update($id, array $data);
}
