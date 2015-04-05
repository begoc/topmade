<?php

namespace Topmade\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * @package Topmade\Models
 *
 * @property int id
 * @property string title
 * @property string keywords
 * @property string description
 * @property string author
 * @property string handle
 */

class Section extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'keywords',
        'description',
        'author',
    ];

    public function articles()
    {
        return $this->hasMany('Topmade\Models\Articles');
    }
}
