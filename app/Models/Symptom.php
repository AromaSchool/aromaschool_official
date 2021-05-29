<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'symptoms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'system_id',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot',
        'laravel_through_key',
        'system_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function system()
    {
        return $this->belongsTo(PhysiologicalSystem::class, 'system_id', 'id');
    }

    public function presentations()
    {
        return $this->belongsToMany(Presentation::class, PresentationSymptom::class, 'symptom_id', 'presentation_id');
    }
}
