<?php

namespace Topmade\Repositories;

use Illuminate\Support\Facades\Validator;
use Topmade\Contracts\Repositories\Article as ArticleContract;
use Topmade\Models\Article as Model;

class Article implements ArticleContract
{
    public function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|max:255'
        ]);
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
        $article = $this->find($id);

        return $article->update($data);
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection|Model|static
     */
    public function find($id)
    {
        return Model::find($id);
    }
}
