<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use App\Models\Currency;
use Cart;
class Order extends Model
{
  use Uuid;

  protected $primaryKey = 'ref';
  protected $keyType = 'string';
  public $incrementing = false;

  protected $guarded = [];

    protected $fillable =[
		  'name', 'lastname', 'ref', 'address', 'phone', 'email',
		  'state', 'city' ,'method_payment', 'status'
	  ];
    
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }

    public function getIsPendingAttribute()
    {
        return ($this->status == 0) ? true : false;
    }

    public function getIsExpiredAttribute()
    {
        return now()->diffInHours($this->updated_at) > 24 ? true : false;                             
    }

    public function getConvertAmountAttribute() 
    {
        return $this->amount * $this->rate;
    }

    static public function generateOrder($request)
    {
        $order = self::firstOrNew($request);
        $order->amount = Cart::total();
        $cur = Currency::where('acronym',config('store.currency'))->first();
		$order->currency = $cur->acronym;
		$order->rate = $cur->rate;
        $order->save();
    
        return $order;
    }

    
}
