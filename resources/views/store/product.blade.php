@extends('layouts.store')

@section('page_title', ' - ' . ($product->name ?? 'Nombre del producto'))

@section('content')

    <div class="product">

        <x-store.product-showcase/>
        
    </div>

    <x-store.policy />

    <x-store.cta-suscribe />

@endsection