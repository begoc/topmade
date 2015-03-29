<?php

namespace Topmade\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Topmade\Contracts\Repositories\Section as SectionContract;
use Topmade\Models\Section as Model;

class Section implements SectionContract
{

    public function validator(array $data)
    {
        // TODO: Implement validator() method.
    }

    public function update($id, array $data)
    {
        $section = $this->findOrNew($id, [
            'title' => $data['title'],
            'keywords' => $data['keywords'],
            'description' => $data['description'],
            'author' => $data['author']
        ]);

        return $section->save();
    }

    /**
     * @param $id
     * @param array $attributes
     * @return Model
     */
    private function findOrNew($id, array $attributes)
    {
        $section = Model::find($id);

        if (! is_null($section)) {
            $section->fill($attributes);

            return $section;
        }

        return $this->newSection($attributes);
    }

    /**
     * @param array $attributes
     * @return Model
     */
    private function newSection(array $attributes)
    {
        $section = new Model($attributes);
        $section->handle = $attributes['handle'];

        return $section;
    }

    /**
     * @return Collection
     */
    public function all()
    {
        return Model::all()->keyBy('handle');
    }
}
