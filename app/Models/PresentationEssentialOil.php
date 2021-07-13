<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PresentationEssentialOil extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    public const UPDATED_AT = null;

    public const CREATED_AT = null;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'presentation_essential_oils';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'presentation_id',
        'essential_oil_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'presentation_id',
        'essential_oil_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function essentialOil()
    {
        return $this->hasOne(EssentialOil::class, 'essential_oil_id', 'id');
    }

    public function presentation()
    {
        return $this->hasOne(Presentation::class, 'presentation_id', 'id');
    }
}
