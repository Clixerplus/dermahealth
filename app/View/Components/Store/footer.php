<?php

namespace App\View\Components\store;

use Illuminate\View\Component;
use App\Models\Product;

class footer extends Component
{
    public $products;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->products = Product::take(5)->get();
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.store.footer');
    }
}
