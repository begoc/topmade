<?php

namespace Topmade\Repositories;

use Illuminate\Support\Facades\Validator;
use Topmade\Contracts\Repositories\Article as ArticleContract;
use Topmade\Models\Article as Model;

class Article implements ArticleContract
{
    public function create(array $data)
    {
        return Model::create([
            'icon' => $data['icon'],
            'title' => $data['title'],
            'content' => $data['content'],
            'handler' => $data['handler'],
            'header' => $data['header'],
        ]);
    }

    public function update($id, array $data)
    {
        $article = $this->find($id);

        if (!$article) {
            return false;
        }

        return $article->update($data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Support\Collection|Model|static
     */
    public function find($id)
    {
        return Model::find($id);
    }
}
