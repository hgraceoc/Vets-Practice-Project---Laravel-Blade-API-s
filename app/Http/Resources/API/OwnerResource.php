<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) 
    { return [
        "id" => $this->id,
        "first_name" => $this->title,
        "last_name" => $this->last_name,
        "address_1" => $this->address_1,
        "address_2" => $this->address_2,
        "animals" => $this->pluck('name')
    ];
    //returning an array - key name in an array
    //from the owner model, get the id 
        return parent::toArray($request);
    }
}
