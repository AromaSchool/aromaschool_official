<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentationVideo extends Model
{
    use \Eloquence\Behaviours\CamelCasing;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'presentation_videos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'presentation_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'presentation_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function presentation()
    {
        return $this->belongsTo(Presentation::class, 'presentation_id', 'id');
    }
}
