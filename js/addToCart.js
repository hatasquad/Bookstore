let cartSum = 0;
function init() {
    $.getJSON("goods.json", goodsOut);
    let hash = window.location.hash.substring(1);
    $.post(
        "admin/core.php",
        {
            "action" : "loadSingleGoods",
            "id" : hash
        },
        goodsOut
    );
}
function goodsOut(data){
    data = JSON.parse(data);
    let out = '';
    out += `<div class="book-info__image col-md-4">
                        <img src="${data.img}" alt="book image">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="book-info__description col-md-7">
                        <h1 class="text-left"><span>${data.title}</span></h1>
                        <h2 class="text-muted text-left">${data.author}</h2>
                        <div class="book-info__description-price">
                            Cena<br>
                            <span>${data.price} zł</span></div>
                        <div class="book-info__description-quantity secondary-text">
                            <p>Wybierz ilość</p>
                            <div class="counter-wrapper">
                                <button type="button" onclick="this.nextElementSibling.stepDown()">-</button>
                                <input type="number" min="1" max="100" value="1" readonly class="counter">
                                <button type="button" onclick="this.previousElementSibling.stepUp()">+</button>
                            </div>
                        </div>
                        <button class="mainBtn addToCartBtn" data-id="${data.title}">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        <div class="book-info__description-text">
                            ${data.description}
                        </div>
                    </div>`
    $('.book-info').html(out);
    $('.addToCartBtn').on('click', addToCart);
}
//let cart = {};
function addToCart(e) {
    let count = $('.counter').val();
    e.preventDefault();
    let id = $(this).attr('data-id');
    if (cart[id] === undefined){
        if($('.counter').hasClass("counter")){
            cart[id] = parseInt(count);
        }else {
            cart[id] = 1;
        }
    }
    else {
        if($('.counter').hasClass("counter")){
            cart[id] = cart[id] + parseInt(count);
        }else {
            cart[id]++;
        }

    }
    saveCart();
}

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}
function loadCart(){
    if(localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));

    }
}


$(document).ready(function () {
    init();
    loadCart();
    for (let k in cart){
        cartSum = cartSum + cart[k]
    }
    $('.cart-count').html(cartSum)
})