<?php

namespace Topmade\Contracts\Repositories;

interface Article extends Repository
{
    public function create(array $data);

    public function update($id, array $data);

    public function find($id);
}
