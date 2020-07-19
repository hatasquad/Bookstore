let cart ={};
function loadCart(){
    if(localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));
        console.log(cart);
        showCart();
    }else {
        $('.cart__wrapper').html('cart is empty');
    }
}

function showCart(){
    $.getJSON('goods.json', function (data) {
        let goods = data;
        let out = " ";
        for(let id in cart){
            out += `<div class="cart__wrapper">
<div class="cart__left">
                <img class="cart-img" src="${goods.books[id-1].img}" alt="book">
            </div>
            <div class="cart__lable">
                <h2 class="sub-title">${goods.books[id-1].author}</h2>
                
            </div>
            <div class="cart__number">
                <h2 class="sub-title">${cart[id]}</h2>
                <a class="secondary-link" href="#"><span class="secondary-text"> zmień </span> </a>
            </div>
            <div class="cart__cost">
                <h2 class="sub-title">${goods.books[id-1].price} <span>zł</span> </h2>
            </div>
            <div class="cart__trash">
                <a class="cart__trash-link" href="#"> <i class="fas fa-trash-alt"></i></a>
                <a class="secondary-link" href="#"><span class="secondary-text"> usuń </span> </a>
            </div></div>`
        }
        $(".cart").html(out);
    });
}

$(document).ready(function () {
    loadCart();

})