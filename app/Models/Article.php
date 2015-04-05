<?php

namespace Topmade\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articles
 * @package Topmade\Models
 *
 * @property string title
 * @property string content
 * @property string section_id
 * @property string order
 * @property Section section
 */
class Article extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'icon',
        'title',
        'content',
        'section_id',
        'order',
    ];

    /**
     * Contact belongs to a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('Topmade\Models\Section');
    }
}
