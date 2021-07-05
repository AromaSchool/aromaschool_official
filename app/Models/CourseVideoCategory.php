<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseVideoCategory extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'course_video_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id',
        'name',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'course_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function videos()
    {
        return $this->hasMany(CourseVideo::class, 'category_id', 'id')->orderBy('priority');
    }
}
