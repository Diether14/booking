<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Property extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"=> $this->id,
            "building_id"=> $this->building_id,
            "landlord_id"=> $this->landlord_id,
            "name"=> $this->name,
            "bathrooms"=> $this->bathrooms,
            "car_spaces"=> $this->car_spaces,
            "check_in_instructions"=> $this->check_in_instructions,
            "check_out_instructions"=> $this->check_out_instructions,
            "check_in_time"=> $this->check_in_time,
            "check_out_time"=> $this->check_out_time,            
            "wifi_name"=> $this->wifi_name,
            "wifi_password"=> $this->wifi_password,
            "lock_box_code"=> $this->lock_box_code,
            "nightly"=> $this->nightly,
            "weekly"=> $this->weekly,
            "monthly"=> $this->monthly,
            "building_name" => $this->building_name,
            "landlord_name" => $this->firstname.' '.$this->lastname,
        ];
    }
}
