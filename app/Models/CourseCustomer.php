<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseCustomer extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'course_customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'mail',
        'comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function sigUps()
    {
        return $this->hasMany(CourseSignUp::class, 'course_customer_id', 'id');
    }
}
