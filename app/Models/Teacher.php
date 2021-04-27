<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use \Eloquence\Behaviours\CamelCasing;
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'experience',
        'image',
        'priority',
        'category_id',
        'created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'priority',
        'visible',
        'category_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'visible' => 'boolean'
    ];

    public function category()
    {
        return $this->hasOne(TeacherCategory::class, 'id', 'category_id');
    }
}
