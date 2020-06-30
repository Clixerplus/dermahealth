<div class="checkout-body">
    
{{--<div class="row border-bottom mx-1 font-weight-bold">
        <div class="col-12 col-md-6 pl-3 my-2">Nombre de artículo</div>
        <div class="col-md-2 text-center d-none d-md-inline">Precio</div>
        <div class="col-md-2 text-center d-none d-md-inline">Cantidad</div>
        <div class="col-md-2 text-center d-none d-md-inline">Total</div>
    </div>
    @foreach ($cart->content() as $item)  
    <div class="row table table-cart mx-1 mt-3 my-md-0 border-bottom pb-4">
        <div class="cart-product col-12 col-md-6 pl-3 my-3 my-md-0">
            <div class="product-img">
                <img src="{{ asset('img/product/thumbnails/' . $item->options->image) }}" alt="{{ $item->name }}" />
            </div>
            <div class="product-info">
                <div class="title">{{ $item->name }}</div>
                <div class="desc">Envío - Gratis</div>
            </div>
        </div>
        <div class="cart-price col-md-2 d-none d-md-inline text-center">{{ priceFormated($item->price) }}</div>
        <div class="cart-qty col-6 col-md-2 text-center">
            <div class="cart-qty-input">
                <button type="button" class=" left disabled btn-flat" onclick="addOperation('qty{{ $item->id }}')" data-target="#qty{{ $item->id }}"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="{{ $item->qty }}" class="form-control" id="qty{{ $item->id }}" onchange="updateItemCart('{{ route('updateItemCart',$item->rowId) }}',this.value)" min="1" pattern="[0-9]+" required  />
                <a href="" class="qty-control right disabled" onclick="addOperation('qty{{ $item->id }}')"  data-target="#qty{{ $item->id }}"><i class="fa fa-plus"></i></a>
            </div>
            <div class="qty-desc">1 to max order</div>
        </div>
        <div class="cart-total col-6 col-md-2 text-center">
            {{ priceFormated($item->qty * $item->price) }}
        </div>
    </div>
    @endforeach--}}

    <div class="table-responsive">
        <table class="table table-cart">
            <thead>
                <tr>
                    <th>Nombre de artículo</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cart->content() as $item)                    
                <tr>
                    <td class="cart-product">
                        <div class="product-img">
                            <img src="{{ asset('img/product/thumbnails/' . $item->options->image) }}" alt="{{ $item->name }}" />
                        </div>
                        <div class="product-info">
                            <div class="title">{{ $item->name }}</div>
                            <div class="desc">Envío - Gratis</div>
                        </div>
                    </td>
                    <td class="cart-price text-center">{{ priceFormated($item->price) }}</td>
                    <td class="cart-qty text-center">
                        <div class="cart-qty-input">
                            <button type="button" class=" left disabled btn-flat" onclick="addOperation('qty{{ $item->id }}')" data-target="#qty{{ $item->id }}"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="{{ $item->qty }}" class="form-control" id="qty{{ $item->id }}" onchange="updateItemCart('{{ route('updateItemCart',$item->rowId) }}',this.value)" min="1" pattern="[0-9]+" required  />
                            <a href="" class="qty-control right disabled" onclick="addOperation('qty{{ $item->id }}')"  data-target="#qty{{ $item->id }}"><i class="fa fa-plus"></i></a>
                        </div>
                        {{--<div class="qty-desc">1 to max order</div> --}}
                    </td>
                    <td class="cart-total text-center">
                        {{ priceFormated($item->qty * $item->price) }}
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td class="cart-summary" colspan="4">
                        <div class="summary-container">
                            <div class="summary-row">
                                <div class="field">Subtotal</div>
                                <div class="value">{{ priceFormated($cart->subtotal()) }}</div>
                            </div>
                            <div class="summary-row text-danger">
                                <div class="field">Envío</div>
                                <div class="value">{{ priceFormated(0) }}</div>
                            </div>
                            <div class="summary-row total">
                                <div class="field">Total</div>
                                <div class="value">{{ priceFormated($cart->total()) }}</div>
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