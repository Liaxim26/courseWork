/*var carts = {}
function loadCart() {
    if (localStorage.getItem('cart')) {
        carts = JSON.parse(localStorage.getItem('cart'))        
        showCart()
    } else {
        $('.main-cart').html('Корзина gecf')
    }
}

/*function showCart() {
    $.getJSON('products.json', function (data) {
        var products = data
        var out = ''
        var totalPrice = 0
        for (var id in carts) {
            out += `            
            <tr><td><a href="#"><img align="center"
            src="${products[id].img}"
            alt="${products[id].name}"></a></td>
            <td><h5>${products[id].name}</h5></td>
            <td><p>${products[id].price} руб./шт</p></td>
            <button data-id="${id}" class="del-goods">-</button>
            <td><p>${carts[id]}</p></td>
             <button data-id="${id}" class="del-goods">+</button>
            <td><p>${products[id].price*carts[id]} руб</p></td></tr>
            `
            totalPrice += products[id].price*carts[id]
        }
        $('.main-cart').html(out)
        console.log(totalPrice)
    })
}



*/
//loadCart()
