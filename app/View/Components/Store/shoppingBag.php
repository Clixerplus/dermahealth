<?php

namespace App\View\Components\Store;

use Illuminate\View\Component;
use App\Models\Product;
use Cart;

class shoppingBag extends Component
{
    public $cart;
    
    public $clase;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cart = Cart::instance();

        $this->clase = Cart::count() > 0 ? 'btn-orange' : 'btn-default disabled';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.store.shopping-bag');
    }
}
