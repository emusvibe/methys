<?php

namespace App\Vehicles;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    use SoftDeletes;

    protected $fillable = ['owner_id', 'manufacturer', 'type', 'year', 'colour', 'mileage'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * A vehicle belongs to a Owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner() {

        return $this->belongsTo('App\Owners\Owner');
    }
}
