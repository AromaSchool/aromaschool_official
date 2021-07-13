<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EssentialOil extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'essential_oils';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot',
        'laravel_through_key',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
