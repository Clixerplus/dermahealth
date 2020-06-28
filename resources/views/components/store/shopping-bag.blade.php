<div class="header-nav">
    <ul class="nav pull-right">
        <li class="dropdown dropdown-hover">
            <a href="#" class="header-cart" data-toggle="dropdown">
                <i class="fa fa-shopping-bag"></i>
                <span class="total cart-count">{{ $cart->count ?? '0' }}</span>
                <span class="arrow top"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-cart p-0">
                <div class="cart-header">
                    <h4 class="cart-title">Carrito de compras <span class="cart-count">({{ $cart->count ?? '0' }})</span></h4>
                </div>
                <div class="cart-body">
                    <ul class="cart-item">
                        <li>
                            <div class="cart-item-image"><img src="{{ asset ('nutricell/product/product-ipad.jpg') }}" alt="" /></div>
                            <div class="cart-item-info">
                                <h4>iPad Pro Wi-Fi 128GB - Silver</h4>
                                <p class="price">$699.00</p>
                            </div>
                            <div class="cart-item-close">
                                <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                            </div>
                        </li>
                        <li>
                            <div class="cart-item-image"><img src="{{ asset ('nutricell/product/product-imac.jpg') }}" alt="" /></div>
                            <div class="cart-item-info">
                                <h4>21.5-inch iMac</h4>
                                <p class="price">$1299.00</p>
                            </div>
                            <div class="cart-item-close">
                                <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                            </div>
                        </li>
                        <li>
                            <div class="cart-item-image"><img src="{{ asset ('nutricell/product/product-iphone.png') }}" alt="" /></div>
                            <div class="cart-item-info">
                                <h4>iPhone 6s 16GB - Silver</h4>
                                <p class="price">$649.00</p>
                            </div>
                            <div class="cart-item-close">
                                <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cart-footer">
                    <div class="row row-space-10">                        
                        <div class="col-12">
                            <a href="{{ route('checkout') }}" class="btn btn-orange btn-theme btn-block">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <a href="my_account.html">
                @auth
                    <img src="{{ asset ('nutricell/user/user-1.jpg') }}" class="user-img" alt="" />
                @else                
                    <img src="{{ asset ('nutricell/user/user-2.jpg') }}" class="user-img d-xl-none" alt="" />
                    <span class="d-none d-xl-inline">Login / Registrar</span>
                @endauth
            </a>
        </li>
    </ul>
</div>