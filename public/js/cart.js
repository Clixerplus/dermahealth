function fillCartListItem(cart) {
    items = ''
    if (cart.countItem > 0) {
        cart.content.forEach(elem => {
            items += `<li><div class="cart-item-image"><img src="${elem.image}" alt="${elem.name}"/></div><div class="cart-item-info"><h4>${elem.name}</h4><p class="price">${elem.price}</p></div>
            <div class="cart-item-close"><a href="${elem.urlRemove}" data-toggle="tooltip" data-title="Eliminar item">&times;</a></div></li>` 
         });
         if (cart.countItem > 3) {
             items +=`<li><div class="cart-item-info text-center"><h4>(${cart.countItem - 3}) artículos más</h4></div></li>`
         }
         let btn = document.getElementById('btnCheckout');
         btn.classList.remove('btn-default','disabled')
         btn.classList.add('btn-orange')
    }
    else {
        items =`<li><div class="cart-item-info text-center"><h4>No hay artículos</h4></div></li>`
        cart.count = 0;
    }
    document.getElementById('cart-list').innerHTML = items
    updateCartCount(cart.count)
}


const getContentCartList = async(url) => {
    try {
        const request  = await fetch(url);
        const response = await request.json();
        fillCartListItem(response)
    }
    catch {
        //
    }
}


const updateCartCount = (count) => {
    const cartCount = document.querySelectorAll('.cart-count')
    cartCount.forEach((e)=>(e.textContent = count))
}


const addItemCart = async (addUrl) => {
    try {
        const request  = await fetch(addUrl)
        const response = await request.json()
        fillCartListItem(response)

    } catch {
        //
    }       

}


const updateItemCart = async (url, qty) => {
    if (!isNaN(qty)) {
        try {
            const request  = await fetch(`${url}/${qty}`);
            const response = await request.json();
            console.log(response)
            fillCartListItem(response)
        } catch {
            //          
        }       
    }
}

const subOperation = (id) => {
    let val = document.getElementById(id).value
    console.log(val)
    val > 1 ? val-- : val=1
    console.log(val) 
}

const addOperation = (id) => {
    let val = document.getElementById(id).value
    val++
}