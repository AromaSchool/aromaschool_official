<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSignUp extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'course_sign_ups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_customer_id',
        'course_id',
        'comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'course_customer_id',
        'course_id',
        'created_at',
        'updated_at',
    ];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function customer()
    {
        return $this->hasOne(CourseCustomer::class, 'id', 'course_customer_id');
    }
}
