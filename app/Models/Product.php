<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Currency;
use Illuminate\Support\Str;

class Product extends Model
{
    use SoftDeletes;

	/**
     * The primary key associated with the table.
     *
     * @var string
     */
	protected $primaryKey = 'ref';

	/**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

	/**
     *
     *
     * @var array
     */
    protected $fillable = [
    	'ref', 'name', 'slug',
    	'description', 'image',
    	'category', 'price', 'stock',
    	'stock_min', 'stock_max'
    ];

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

   /**
     * Set product's slug.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug(Str::lower($value));
    }


    public function priceBy($currency)
    {
        $currency = Currency::where('acronym',$currency)->first();
        $rate     = $currency->rate;
        $price    = $this->price * $rate;
        return $price;
    }

    public function getImageUrlAttribute()
    {
        return asset('img/products/'. $this->image);
    }
    public function getImageAltAttribute()
    {
        return "{$this->name} - {$this->category}";
    }

    public function getUrlAttribute()
    {
        return route('product', $this->slug);
    }
}
