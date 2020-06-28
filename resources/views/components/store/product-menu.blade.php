<div class="dropdown-menu">
    @foreach ($products as $product)
    <a class="dropdown-item" href="{{ route('product', $product->slug ?? 'slug') }}">{{ $product->slug ?? 'Producto' }}</a>        
    @endforeach
</div>