$(document).ready(function () {

$('.addToCartBtn').on('click', addToCart);

let cart = {};

function addToCart(e) {
    e.preventDefault();
    let id = $(this).attr('data-id');
    console.log(id);
    if (cart[id] === undefined){
        cart[id] = 1;
    }
    else {
        cart[id]++;
    }
    console.log(cart);
    saveCart();
}

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}
function loadCart(){
    if(localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));
        console.log(cart);
    }
}
    loadCart();
})