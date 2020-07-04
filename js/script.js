var cart = {}

function init() {
  $.getJSON("products.json", productsOut);
}

function productsOut(pod){
  var out=''
  for (var key in pod){
    out +=
    `
    <div class="card">
      <div class="card-img">  
        <a href="#"><img align="center"
        src="${pod[key].img}"
        alt="${pod[key].name}"></a>
      </div>
        <h5>${pod[key].name}</h5>
        <p>${pod[key].price} руб./шт</p>
        <button class="btn-cart btn btn-info btn-block" type="submit" data-id="${key}">Купить</button>
    </div>
    `
  }
  $('.products-out').html(out) 
  $('.btn-cart').on('click', addToCart)
}

function addToCart(){
  var id = $(this).attr('data-id') 
  if (cart[id]==undefined) {
    cart[id] = 1
  }  else {
    cart[id] ++
  }
  saveCart()
}

function saveCart(){
  localStorage.setItem('cart', JSON.stringify(cart))
}

function loadCart() {
  if (localStorage.getItem('cart')) {
    cart = JSON.parse(localStorage.getItem('cart'))
  } else {
    $('main-cart').html('korzina pusta')
  }
}

$(document).ready(function(){
  init()
  loadCart()
})
