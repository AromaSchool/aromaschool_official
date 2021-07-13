<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'presentations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semesters_id',
        'name',
        'image',
        'summary',
        'content',
        'participate',
        'ppt',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot',
        'visible',
        'semester_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function semester()
    {
        return $this->hasOne(PresentationSemester::class, 'id', 'semester_id');
    }

    public function videos()
    {
        return $this->hasMany(PresentationVideo::class, 'presentation_id', 'id');
    }

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, PresentationSymptom::class, 'presentation_id', 'symptom_id');
    }

    public function essentialOils()
    {
        return $this->belongsToMany(
            EssentialOil::class,
            PresentationEssentialOil::class,
            'presentation_id',
            'essential_oil_id',
        );
    }
}
