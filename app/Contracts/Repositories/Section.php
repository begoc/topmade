<?php

namespace Topmade\Contracts\Repositories;

interface Section extends Repository
{
    public function create(array $data);

    public function update($id, array $data);

    public function all();

    public function findByHandel($handle);
}
