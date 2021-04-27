<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleKeyword extends Model
{
    use \Eloquence\Behaviours\CamelCasing;
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'article_keywords';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
