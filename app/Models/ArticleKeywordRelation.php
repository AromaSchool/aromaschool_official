<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleKeywordRelation extends Model
{
    /**
        * The table associated with the model.
        *
        * @var string
        */
    protected $table = 'article_keyword_relations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'keyword_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
