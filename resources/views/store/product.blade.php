@extends('layouts.store')

@section('page_title', ' - ' . ($product->name ?? 'Nombre del producto'))

@section('content')

    <div class="product">

        @include('store.snippets.product-showcase')
        
    </div>

    <x-store.policy />

    <x-store.cta-suscribe />

@endsection

@section('js_scrits')
    <script>

        function addItem(url) {
            let btn = document.getElementById('addItemBtn');
            btn.disabled = true;
            if (addItemCart(url)) {
                btn.disabled = false;
                askToCheckout('{{ route("checkout") }}');
            }
            else
            {
                Swal.fire('Error', 'No se pudo agregar el item', 'error');
            }
        }

        const askToCheckout = (url) => {
            let customStyleSwal = Swal.mixin({
                customClass: {
                confirmButton: 'btn btn-green my-2',
                cancelButton: 'btn btn-default my-2',
                },
                buttonsStyling: false
            })
            customStyleSwal.fire({
                title: 'El artículo ha sido agregado',
                text: "Puedes ir a confirmar tu compra o seguir disfrutando de nuestro contenido",
                icon: 'success',
                allowOutsideClick: false,
                showCancelButton: true,
                cancelButtonText: 'Seguir comprando <i class="fas fa-shopping-cart"></i>',
                confirmButtonText: 'Verificar compra <i class="fas fa-check"></i>',
            }).then((result) => {
                if (result.value) {
                    window.location = url;
                }
            }) 
        }
    </script>
@endsection