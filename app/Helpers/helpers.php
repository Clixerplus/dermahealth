<?php
use App\Models\Currency;

function active($path) {    
    return Route::is($path) ? 'active' : '';
}

function priceFormated($price) {
    $currency = Currency::where("acronym",config('store.currency'))->first();
    $sign    = $currency->sign;
    $acronym = $currency->acronym;
    $price   = number_format(priceConversion($price,$acronym),2,',','.');
    return "{$acronym}({$sign}) {$price}";
}

function priceConversion($price, $cur = "USD" ) {
    $currency = Currency::where("acronym",$cur)->first();
    $rate    = $currency->rate;
    return $price * $rate;
}