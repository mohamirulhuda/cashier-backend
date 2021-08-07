<?php

namespace App\Http\Resources\Dropdown;

use Illuminate\Http\Resources\Json\JsonResource;

class CommodityUnitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
