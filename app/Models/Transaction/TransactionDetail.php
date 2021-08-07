<?php

namespace App\Models\Transaction;

use App\Models\Commodity\Commodity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';
    protected $guarded = [];

    public function commodity()
    {
        return $this->belongsTo(Commodity::class, 'commodity_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_code', 'code')->select(['id', 'code']);
    }
}
