<?php

namespace App\Models\Commodity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commodity extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function commodityType()
    {
        return $this->belongsTo(CommodityType::class, 'type_id', 'id');
    }

    public function commodityUnit()
    {
        return $this->belongsTo(CommodityUnit::class, 'unit_id', 'id');
    }

}
