<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'question',
        'answer',
        'priority',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'priority',
        'category_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
