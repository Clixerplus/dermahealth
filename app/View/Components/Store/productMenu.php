<?php

namespace App\View\Components\store;

use Illuminate\View\Component;
use App\Models\Product;

class productMenu extends Component
{
    public $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->products = Product::orderBy('name')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.store.product-menu');
    }
}
