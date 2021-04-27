<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use \Eloquence\Behaviours\CamelCasing;
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'reviews';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'semester',
        'review',
        'image',
        'graduation',
        'priority',
        'created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'priority',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
