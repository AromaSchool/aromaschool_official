<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'question_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'priority',
        'created_by',
        'updated_by',
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
