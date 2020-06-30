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
           <ul id="cart-list" class="cart-item"></ul>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        getContentCartList('{{ route("getContentCart") }}');
    });
</script>