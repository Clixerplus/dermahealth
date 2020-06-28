@extends('layouts.store')

@section('page_title', ' - Bienvenida/o a tu tienda online')

@section('content')

    <div class="product">

        <x-store.product-showcase/>
        
    </div>

    <x-store.policy />

    <x-store.cta-suscribe />

@endsection