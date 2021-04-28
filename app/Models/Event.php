<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use \Eloquence\Behaviours\CamelCasing;
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'date',
        'created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'visible',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
