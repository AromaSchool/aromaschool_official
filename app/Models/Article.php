<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
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
        'category_id',
        'title',
        'content',
        'image',
        'author_name',
        'author_image',
        'author_bio',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'hits',
        'visible',
        'score',
        'category_id',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function category()
    {
        return $this->hasOne(ArticleCategory::class, 'id', 'category_id');
    }

    public function keywords()
    {
        return $this->belongsToMany(ArticleKeyword::class, 'article_keyword_relations', 'article_id', 'keyword_id');
    }
}
