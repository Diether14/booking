<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'tbl_properties';

    /**
     * Get the building that owns the property.
     */
    public function building()
    {
        return $this->belongsTo('App\Building');
    }
    /**
     * Get the landlord that owns the property.
     */
    public function landlord()
    {
        return $this->belongsTo('App\Landlord');
    }
}
