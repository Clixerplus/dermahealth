@extends('layouts.store')

@section('page_title', ' - Confirmación de compra')

@section('css_styles')
<style>
    #checkout-cart,
    #checkout-info,
    #checkout-payment {
        display:none;
    }
    
    #checkout-cart.visible,
    #checkout-info.visible,
    #checkout-payment.visible {
        display: block;
    }
</style>
@endsection
@section('content')
<div class="section-container">    
    <div class="container">        
        <div class="checkout">            
            <form action="{{ route('checkout-confirm') }}" method="POST" name="form_checkout">
                @csrf
                <div class="checkout-header">
                    
                    <div class="row">

                        <div class="col-lg-3">
                            <div id="checkout-cart-tab" class="step active">
                                <a>
                                    <div class="number">1</div>
                                    <div class="info">
                                        <div class="title">Carrito</div>
                                        <div class="desc">Artículos agregados.</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div id="checkout-info-tab" class="step">
                                <a>
                                    <div class="number">2</div>
                                    <div class="info">
                                        <div class="title">Envío</div>
                                        <div class="desc">Información de usuario.</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                                        
                        <div class="col-lg-3">
                            <div id="checkout-payment-tab" class="step">
                                <a>
                                    <div class="number">3</div>
                                    <div class="info">
                                        <div class="title">Pago</div>
                                        <div class="desc">Eliga metodo de pago. </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                                        
                        <div id="checkout-confirm-tab" class="col-lg-3">
                            <div class="step">
                                <a>
                                    <div class="number">4</div>
                                    <div class="info">
                                        <div class="title">Confirmación</div>
                                        <div class="desc">Orden de compra completada.</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
                <div id="checkout-cart" class="visible">
                    @include('store.snippets.checkout-cart')
                </div>

                <div id="checkout-info">
                    @include('store.snippets.checkout-info')
                </div>

                <div id="checkout-payment">
                    @include('store.snippets.checkout-payment')
                </div>

            </form>
        </div>        
    </div>    
</div>
<script>
    function activate_tab(deactivate, activate) {
        
        change_class(activate + '-tab'  , 'active' , true);
        change_class(deactivate + '-tab', 'active' , false);
        
        change_class(deactivate, 'visible', false);
        change_class(activate  , 'visible', true);
    }

    function change_class(id, clase, type)  {
        console.log(id)
        elem = document.getElementById(id)
        if (type) 
            elem.classList.add(clase) 
        else
            elem.classList.remove(clase)
    }
</script>

@endsection

@section('top-navbar')@show
@section('navbar')@show
@section('main-banner')@show
@section('footer')@show
@section('copy')@show