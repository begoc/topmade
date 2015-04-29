<?php

namespace Topmade\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articles
 * @package Topmade\Models
 *
 * @property string icon
 * @property string title
 * @property string handler
 * @property string header
 * @property Section content
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
        'handler',
        'header',
        'content',
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
