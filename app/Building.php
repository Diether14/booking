<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'tbl_buildings';

    /**
     * Get the properties for the building.
     */
    public function properties()
    {
        return $this->hasMany('App\Property');
    }    
}
