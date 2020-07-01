
@extends('layouts.store')

@section('page_title', ' - Registro de pago')

@section('content')
<div class="section-container" id="checkout-info">
    <div class="container">
        <div class="checkout">

            <div class="checkout-header">                    
                <div class="row">
                    
                    <div class="col-lg-3">
                        <div class="step active">
                            <a href="#">
                                <div class="number">1</div>
                                <div class="info">
                                    <div class="title">Registro de pago</div>
                                    <div class="desc">Pago de ordenes pendiente.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>                    
            </div>
                
            <div class="checkout-body">

            @isset($error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endisset
            
            @isset($success)
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Pago registrado!</h4>
                    <p>Su pago ha sido registrado satisfactoriamente. Pronto estará disfrutando de nuestros productos.</p>
                    <hr>
                    <p class="mb-0">Todos los pagos serán revisados y procesados en las próximas 48hrs. Una vez aprobados le será notificado via email.</p>
                </div>
            @endisset

            @isset($find)
                @include('store.snippets.payment-store')
            @else
                @include('store.snippets.payment-register')
            @endisset
            
                <hr />
                <div class="m-b-5"><b>Condiciones de Pago</b></div>
                <ul class="checkout-info-list">
                    <li>Los pagos se precesan en 24h hábiles.</li>
                    <li>Pagos entrebancos distintos se procesarán en 96h hábiles.</li>
                    <li>Solo se validará un pago por cada código de referencia.</li>
                    <li>Una vez procesado su pago le será notificado vía correo electrónico.</li>
                </ul>
            </div>  
                
            
        </div>
    </div>
</div>
@endsection

@section('main-banner')@show