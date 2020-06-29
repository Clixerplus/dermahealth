<div class="product-detail">

	<div class="product-image">

		<div class="product-main-image" data-id="main-image">
			<img src="{{ asset('img/product/' . $product->image) }}" alt="{{ $product->name }}" />
		</div>

	</div>

	<div class="product-info">

		<div class="product-info-header">
			<h1 class="product-title"><span class="badge bg-red">Nuevo</span> 
				{{ $product->name }} - {{ $product->ref }} </h1>
			<ul class="product-category">
				<li><a href="#">{{ $product->category }}</a></li>
				{{-- <li>/</li>
				<li><a href="#">mobile phone</a></li>
				<li>/</li>
				<li><a href="#">electronics</a></li>
				<li>/</li>
				<li><a href="#">lifestyle</a></li> --}}
			</ul>
		</div>

		<div class="product-warranty">
			{{-- <div class="pull-right">Availability: In stock</div>  --}}
			<div><b>Disponible:</b> En stok</div>
		</div>

		<ul class="product-info-list">
			<li><i class="fa fa-circle"></i> {{ $product->description }}</li>
		</ul>

		<div class="product-social">
			<ul>
				<li><a href="javascript:;" class="facebook" data-toggle="tooltip" data-trigger="hover" data-title="Facebook" data-placement="top"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="javascript:;" class="twitter" data-toggle="tooltip" data-trigger="hover" data-title="Twitter" data-placement="top"><i class="fab fa-twitter"></i></a></li>
				<li><a href="javascript:;" class="google-plus" data-toggle="tooltip" data-trigger="hover" data-title="Google Plus" data-placement="top"><i class="fab fa-google-plus-g"></i></a></li>
				<li><a href="javascript:;" class="whatsapp" data-toggle="tooltip" data-trigger="hover" data-title="Whatsapp" data-placement="top"><i class="fab fa-whatsapp"></i></a></li>
				<li><a href="javascript:;" class="tumblr" data-toggle="tooltip" data-trigger="hover" data-title="Tumblr" data-placement="top"><i class="fab fa-tumblr"></i></a></li>
			</ul>
		</div>

		<div class="product-purchase-container">
			{{-- <div class="product-discount">
				<span class="discount">{{ $product->formatedPriceBy('VES') }}</span>
			</div> --}}
			<div class="product-price">
				<div class="price">{{ priceFormated($product->price) }}</div>
			</div>
			<button id="addItemBtn" onclick="addItemCart('{{ route('addItemCart', $product->ref) }}','{{ route('checkout') }}')" class="btn btn-inverse btn-theme btn-lg width-300">AGREGAR AL CARRITO</button>
		</div>

	</div>

</div>