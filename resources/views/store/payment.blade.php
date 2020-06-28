
@extends('layouts.store')

@section('page_title', ' - Registro de pago')

@section('content')
<div class="section-container" id="checkout-info">
    <div class="container">
        <div class="checkout">
            <form action="checkout_payment.html" method="POST" name="form_shipping" class="form-horizontal">
              
                <div class="checkout-header">                    
                    <div class="row">
                        
                        <div class="col-lg-3">
                            <div class="step active">
                                <a href="#">
                                    <div class="number">2</div>
                                    <div class="info">
                                        <div class="title">Shipping Address</div>
                                        <div class="desc">Vivamus eleifend euismod.</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>                    
                </div>
                
                <div class="checkout-body">
                    <div class="form-group row">
                        <label class="col-form-label col-md-4 text-lg-right">
                        Código de referencia <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="ref" value="" placeholder="Num. de referencia de venta" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4 text-lg-right">
                        Correo asociado <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="email" class="form-control" name="email" value="" placeholder="Correo electrónico" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4 text-lg-right">
                        Banco <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="bank_name" value="" placeholder="Nombre del banco" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4 text-lg-right">
                        Número de referencia <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="bank_ref" value="" placeholder="Referencia de la transferencia" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4 text-lg-right">
                        Fecha de pago <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="primary_phone" value="" placeholder="Fecha de transferencia" />
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-form-label col-md-4 text-lg-right">
                        Monto <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="zip_code" value="" placeholder="0.00" />
                            <p class="form-text m-b-0 f-s-12 text-muted f-w-600 m-t-10">Introduzca el monto con 2 decimales separados punto(.)</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4 text-lg-right">
                            &nbsp; <span class="text-danger">&nbsp;</span>
                            </label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-block btn-inverse btn-theme">ENVIAR <i class="fas fa-paper-plane m-l-10"></i></button>
                        </div>
                    </div>
                    <hr />
                    <div class="m-b-5"><b>Condiciones de Pago</b></div>
                    <ul class="checkout-info-list">
                        <li>Los pagos se precesan en 24h hábiles.</li>
                        <li>Pagos entrebancos distintos se procesarán en 96h hábiles.</li>
                        <li>Solo se validará un pago por cada código de referencia.</li>
                        <li>Una vez procesado su pago le será notificado vía correo electrónico.</li>
                    </ul>
                </div>  
                
            </form>
        </div>
    </div>
</div>
@endsection