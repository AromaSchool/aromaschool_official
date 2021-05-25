<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentationSymptom extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    public const UPDATED_AT = null;

    public const CREATED_AT = null;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'presentation_symptoms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'presentation_id',
        'symptom_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'presentation_id',
        'symptom_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function symptom()
    {
        return $this->hasOne(Symptom::class, 'symptom_id', 'id');
    }

    public function presentation()
    {
        return $this->hasOne(Presentation::class, 'presentation_id', 'id');
    }
}
