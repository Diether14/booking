<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $table = 'tbl_landlords';

    /**
     * Get the properties for the landlord.
     */
    public function properties()
    {
        return $this->hasMany('App\Property');
    }    
}
