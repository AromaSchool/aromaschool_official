<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OauthUser extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'oauth';

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'english_name',
        'email',
        'password',
        'birthday',
        'gender',
        'phone',
        'address',
        'line',
        'we_chat',
        'whats_app',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        $mysql = \DB::connection('mysql')->getDatabaseName();

        return $this->belongsToMany(
            Course::class,
            "$mysql.oauth_user_courses",
            'user_id',
            'course_id'
        )->withPivot('start_date', 'end_date');
    }
}
