<?php

namespace Topmade\Repositories;

use Topmade\Contracts\Repositories\Article as ArticleContract;
use Topmade\Models\Article as Model;

class Article implements ArticleContract
{
    public function validator(array $data)
    {
        // TODO: Implement validator() method.
    }

    public function create(array $data)
    {
        return Model::create([
            'icon' => $data['icon'],
            'title' => $data['title'],
            'content' => $data['content'],
            'section_id' => $data['section'],
            'order' => $data['order']
        ]);
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function find($id)
    {
        return Model::find($id);
    }
}
