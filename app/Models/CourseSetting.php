<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSetting extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'course_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id',
        'classroom_id',
        'schedule_id',
        'start_time',
        'end_time',
        'weeks',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'course_id',
        'classroom_id',
        'schedule_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function classroom()
    {
        return $this->hasOne(CourseClassroom::class, 'id', 'classroom_id');
    }

    public function schedule()
    {
        return $this->hasOne(CourseSchedule::class, 'id', 'schedule_id');
    }

    public function batches()
    {
        return $this->hasMany(CourseBatch::class, 'setting_id', 'id');
    }
}
