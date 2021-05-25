<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentationSemester extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'presentation_semesters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semester',
        'graduation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function presentations()
    {
        return $this->hasMany(Presentation::class, 'semester_id', 'id');
    }
}
