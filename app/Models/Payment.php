<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Payment extends Model
{
    use Uuid;

    protected $primaryKey = 'ref';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $fillable =[
        'bank_name', 'transaction_ref', 'date', 'amount', 'ref', 'order_ref'
    ];

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

    
}
