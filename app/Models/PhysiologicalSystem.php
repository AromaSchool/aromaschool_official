<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysiologicalSystem extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'physiological_systems';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'created_by',
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

    public function symptoms()
    {
        return $this->hasMany(Symptom::class, 'system_id', 'id');
    }
}
