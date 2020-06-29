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
        const addItemCart = async (addUrl, confirmUrl) =>{
            let btn = document.getElementById('addItemBtn');
            btn.disabled = true;
      
            try {
                let resp = await fetch(addUrl)
                const data = await resp.json()
                btn.disabled = false;
                updateCart(data);
                redirectCheckout(confirmUrl);

            } catch {
                Swal.fire('Hubo un error al intentar agregar el artículo', 'nose','error');
            }       

        }

        const redirectCheckout = confirmUrl => {
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
                width: 275,
                allowOutsideClick: false,
                showCancelButton: true,
                cancelButtonText: 'Seguir comprando <i class="fas fa-shopping-cart"></i>',
                confirmButtonText: 'Verificar compra <i class="fas fa-check"></i>',
            }).then((result) => {
                if (result.value) {
                window.location = confirmUrl;
                }
            })
        }
        const updateCart = (response) => {
            count = response.count
            const cartCount = document.querySelectorAll('.cart-count')
            cartCount.forEach((e)=>{e.textContent = count})


        }
    </script>
@endsection