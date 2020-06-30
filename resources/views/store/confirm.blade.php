@extends('layouts.store')

@section('page_title', ' - ' . ($pageTitle ?? 'Pagina de confirmación'))

@section('content')
<div class="section-container" id="checkout-cart">	
	<div class="container">		
		<div class="checkout">

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
				
				
			<div class="checkout-body">
				<div class="checkout-message">
					<h1>Tu orden se ha generado exitosamente! <small>Se ha enviado un correo con los pasos a seguir para el pago.</small></h1>
					<div class="table-responsive2">
						<table class="table table-payment-summary">
							<tbody>
								<tr>
									<td class="field">Usuario</td>
									<td class="value">{{ $order->name  }} {{ $order->lastname  }}</td>
								</tr>
								<tr>
									<td class="field">Número de referencia</td>
									<td class="value">{{ $ref }}</td>
								</tr>
								<tr>
									<td class="field">Contacto</td>
									<td class="value">{{ $order->email }}</td>
								</tr>
								<tr>
									<td class="field">Fecha de orden</td>
									<td class="value">{{ $order->created_at }}</td>
								</tr>
								<tr>
									<td class="field">Sumario</td>
									<td class="value product-summary">
										@foreach ($content as $item)
										<div class="product-summary-img">
											<img src="{{ asset ('img/product/' . $item->options->image) }}" alt="{{ $item->name }}" />
										</div>
										<div class="product-summary-info">
											<div class="title">{{ $item->name }}</div>
											<div class="desc">Envío - Gratis</div>
										</div>
										@endforeach
									</td>
								</tr>
								<tr>
									<td class="field">Monto Total</td>
									<td class="value">{{ priceFormated($total) }}</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p class="text-silver-darker text-center m-b-0">Para asistencia puede contactarnos via email: asistencia@dermaheatlh.com.ve</p>
					<p class="text-silver-darker text-center my-2">Si ya realizó su pago puede registrarlo <a href="{{ route('payment') }}">aquí</a></p>
				</div>
				
			</div>
				
				
			<div class="checkout-footer text-center">
				<a href="{{ route('home') }}" class="btn btn-primary btn-theme @auth m-r-5 @endauth">IR AL INICIO</a>
				@auth
					<a href="{{-- {{ route('order-history') }} --}}" class="btn btn-primary btn-theme m-l-5">VER HISTORIAL</a>
				@endauth
			</div>
				
		</div>
	</div>
</div>
@endsection