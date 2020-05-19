<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {return [
        "id" => $this->id,
        "first_name" => $this->title,
        "last_name" => $this->last_name,
    ];
        return parent::toArray($request);
    }
}
