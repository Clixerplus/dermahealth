<li class="dropdown dropdown-hover">
    <a href="#" class="header-cart" data-toggle="dropdown">
        <i class="fa fa-shopping-bag"></i>
        <span class="total cart-count">{{ $cart->count() ?? '0' }}</span>
        <span class="arrow top"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-cart p-0">
        <div class="cart-header">
            <h4 class="cart-title">Carrito de compras (<span class="cart-count">{{ $cart->count() ?? '0' }}</span>)</h4>
        </div>
        <div id="app" class="cart-body">
           {{--<ul id="cart-item" class="cart-item">
                @if ( $cart->count() > 0)
                    @foreach ($cart->content() as $item)
                    <li>
                        <div class="cart-item-image">
                            <img src="{{ asset('img/product/thumbnails/' . $item->options->image ?? 'img') }}" alt="{{ $item->name ?? 'name' }}"/>
                        </div>
                        <div class="cart-item-info">
                            <h4>{{ $item->name ?? 'Item name' }}</h4>
                            <p class="price">{{ priceFormated($item->price) ?? '0.00' }}</p>
                        </div>
                        <div class="cart-item-close">
                            <a href="{{ route('removeItemCart', $item->rowId) }}" data-toggle="tooltip" data-title="Remove">&times;</a>
                        </div>
                    </li>                            
                    @endforeach
                @else
                <li>
                    <div class="cart-item-info">
                        <h4>No hay artículos</h4>
                    </div>
                </li>
                @endif
            </ul>--}}
           <shopping-cart></shopping-cart>
        </div>
        <div class="cart-footer">
            <div class="row row-space-10">                        
                <div class="col-12">
                    <a id="btnCheckout" href="{{ route('checkout') }}" class="btn btn-theme btn-block {{ $clase }}">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</li>

        