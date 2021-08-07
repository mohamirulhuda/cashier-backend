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
        return $this->hasOne(CommodityType::class, 'id', 'type_id');
    }

    public function commodityUnit()
    {
        return $this->hasOne(CommodityUnit::class, 'id', 'unit_id');
    }

    public function commodityStocks()
    {
        return $this->hasOne(CommodityStocks::class, 'id', 'unit_id');
    }

}
