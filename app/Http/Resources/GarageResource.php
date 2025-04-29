<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GarageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
        'id'=>$this->id,
        'name'=>$this->name,
        'zipcode'=>$this->zipcode,
        'coordinates'=>[
            'lng'=>$this->lng,
            'lat'=>$this->lat
        ],
        'total'=>$this->total_spots,
        'free_spots'=>$this->free_spots,

    ];
    }
}
