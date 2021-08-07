<?php

namespace App\Http\Resources\Dropdown;

use Illuminate\Http\Resources\Json\JsonResource;

class CommodityTypeResource extends JsonResource
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
            'id' => $request->id,
            'label' => $request->name,
            'value' => $request->id,
        ];
    }
}
