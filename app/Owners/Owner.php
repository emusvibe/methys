<?php

namespace App\Owners;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['firstname', 'lastname', 'contact_number', 'email'];


    /**
     * A Owner can have many vehicles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function vehicles()
    {

        return $this->hasMany('App\Vehicles\Vehicle');

    }
}
