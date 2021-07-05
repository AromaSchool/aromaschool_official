<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseVideo extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'course_videos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'paid',
        'url',
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
        'pivot',
        'laravel_through_key',
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
        'paid' => 'boolean'
    ];

    public function category()
    {
        return $this->hasOne(CourseVideoCategory::class, 'id', 'category_id');
    }

    public function course()
    {
        return $this->hasOneThrough(
            Course::class,
            CourseVideoCategory::class,
            'id',
            'id',
            'category_id',
            'course_id',
        );
    }
}
