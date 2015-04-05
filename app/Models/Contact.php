<?php namespace Topmade\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Class Contact
 * @package Topmade\Models
 *
 * @property int id
 * @property string company_name
 * @property string email
 * @property string address
 * @property int zip_code
 * @property string city
 * @property string country
 * @property string phone
 * @property string fax
 * @property string user_id
 * @property User user
 */
class Contact extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'zip_code',
        'city',
        'country',
        'phone',
        'fax'
    ];

    /**
     * Contact belongs to a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Topmade\Models\User');
    }
}
