<div class="checkout-body">
    <div class="table-responsive">
        <table class="table table-cart">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="cart-product">
                        <div class="product-img">
                            <img src="../assets/img/product/product-iphone-6s-plus.png" alt="" />
                        </div>
                        <div class="product-info">
                            <div class="title">iPhone 6s Plus 16GB (Silver)</div>
                            <div class="desc">Delivers Tue 26/04/2016 - Free</div>
                        </div>
                    </td>
                    <td class="cart-price text-center">$999.00</td>
                    <td class="cart-qty text-center">
                        <div class="cart-qty-input">
                            <a href="#" class="qty-control left disabled" data-click="decrease-qty" data-target="#qty"><i class="fa fa-minus"></i></a>
                            <input type="text" name="qty" value="1" class="form-control" id="qty" />
                            <a href="#" class="qty-control right disabled" data-click="increase-qty" data-target="#qty"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="qty-desc">1 to max order</div>
                    </td>
                    <td class="cart-total text-center">
                        $999.00
                    </td>
                </tr>
                <tr>
                    <td class="cart-summary" colspan="4">
                        <div class="summary-container">
                            <div class="summary-row">
                                <div class="field">Cart Subtotal</div>
                                <div class="value">$999.00</div>
                            </div>
                            <div class="summary-row text-danger">
                                <div class="field">Free Shipping</div>
                                <div class="value">$0.00</div>
                            </div>
                            <div class="summary-row total">
                                <div class="field">Total</div>
                                <div class="value">$999.00</div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="checkout-footer">
    <a href="{{ route('home') }}" class="btn btn-white btn-lg pull-left btn-theme">SEGUIR COMPRANDO</a>
    <button type="button" class="btn btn-inverse btn-lg btn-theme width-200" onclick="activate_tab('checkout-cart','checkout-info')">CHECKOUT</button>
</div>