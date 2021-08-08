<?php

namespace App\Models\Transaction;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'transaction_type_id', 'date', 'user_id', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sales()
    {
        return $this->hasOne(TransactionSale::class, 'transaction_code', 'code');
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_code', 'code');
    }
}
