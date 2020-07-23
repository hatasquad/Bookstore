let cart = {};
let userInfo = {};




function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
            showCart();
        }
    else {
        $('.cart__wrapper').html('cart is empty');
    }
}

function showCart() {
    let sum = 0;
    if (!isEmpty(cart)) {
        $(".cart").html(`<h1 class="text-center m-4"> Cart is empty </h1>`)
    } else {
        $.getJSON('goods.json', function (data) {
            let goods = data;
            let out = " ";
            for (let id in cart) {
                out += `<div class="cart__wrapper">
<div class="cart__left">
                <img class="cart-img" src="${goods.books[id - 1].img}" alt="book">
            </div>
            <div class="cart__lable">
                <h1 class="sub-title">${goods.books[id - 1].title}</h1>
                <h2 class="sub-title text-muted">${goods.books[id - 1].author}</h2>
                
            </div>
            <div class="cart__number">
                <h2 class="sub-title"> <span data-id="${goods.books[id].id - 1}" class="minus-book"><i class="fa fa-minus-square"></i></span>  <span  class="pl-2 pr-2">${cart[id]}</span>  <span  class="plus-book" data-id="${goods.books[id].id - 1}"><i class="fa fa-plus-square "></i></span></h2>
            </div>
            <div class="cart__cost">
                <h2 class="sub-title"> ${(cart[id]*goods.books[id - 1].price).toFixed(2)} <span class="pl-1">zł</span> </h2>
            </div>
            <div class="cart__trash">
                <a class="cart__trash-link delete-book"  data-id="${goods.books[id].id - 1}"> <i class="fas fa-trash-alt"></i></a>
                <a class="secondary-link delete-book"  data-id="${goods.books[id].id - 1}"><span class="secondary-text"> usuń </span> </a>
            </div></div>`
                sum = sum + cart[id]*goods.books[id - 1].price;
            }
            $(".cart").html(out);
            $(".delete-book").on('click', delGoods);
            $(".plus-book").on('click', plusGoods);
            $(".minus-book").on('click', minusGoods);
            $('.sumPrice').text(sum.toFixed(2));
        });
    }
}

function delGoods() {
    let id = $(this).attr('data-id');
    delete cart[id];
    saveCart();
    showCart();
}
function plusGoods() {
    let id = $(this).attr('data-id');
    cart[id]++;
    saveCart();
    showCart();
}
function minusGoods() {
    let id = $(this).attr('data-id');
    if (cart[id] === 1){
        delete cart[id];
    }else {
        cart[id]--;
    }

    saveCart();
    showCart();
}

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function isEmpty(object) {
    for (let key in object)
        if (object.hasOwnProperty(key)) return true;
    return false;
}



function checkInputs(){
    let eDeliver = $('#oneChoice input[name="deliver"]:checked').val();
    let eName = $("#dane1").val();
    let eLastName = $("#dane2").val();
    let eMail = $("#dane3").val();
    let ePhone = $("#dane4").val();
    if( eName === '' || eLastName === '' || eMail === '' || ePhone ===''|| eDeliver === undefined){
        alert("Insert all inputs")
    }else{
        if (isEmpty(cart)){
            userInfo={
                name: eName,
                lastName: eLastName,
                email: eMail,
                phone: ePhone,
                deliverMethod: eDeliver
            }
            localStorage.setItem('userInfo', JSON.stringify(userInfo));
            window.location.replace("../Bookstore/koszyk2.html")
        }else {
            alert('Cart is empty')
        }

    }

}
function checkInputs2(){
    let eCountry = $("#dane5").val();
    let eRegion = $("#dane6").val();
    let eCity = $("#dane7").val();
    let eStreet = $("#dane8").val();
    let eHouseNumber = $("#dane9").val();
    if( eCountry === '' || eRegion === '' || eCity === '' || eStreet ==='' ||  eHouseNumber === ''){
        alert("Insert all inputs")
    }else{
        userInfo={
            country: eCountry,
            region: eRegion,
            city: eCity,
            street: eStreet,
            houseNumber: eHouseNumber
        }

        let value = JSON.parse(localStorage.getItem('userInfo'));
        let result =  Object.assign(value, userInfo);
        localStorage.setItem('userInfo', JSON.stringify(result));
        window.location.replace("../Bookstore/koszyk3.html")
    }

}

function checkInputs3(){
    let paymentMethod = $('#oneChoice input[name="paymentMethod"]:checked').val();
    if( paymentMethod === undefined){
        alert("Insert all inputs")
    }else{
        userInfo={
            paymentMethod: paymentMethod
        }
        let value = JSON.parse(localStorage.getItem('userInfo'));
        let result =  Object.assign(value, userInfo);
        localStorage.setItem('userInfo', JSON.stringify(result));
        window.location.replace("../Bookstore/koszyk4.html")
    }

}


function checkInputs4(){
    let cardNumber = $("#dane10").val();
    let firstLastName = $("#dane11").val();
    let cvv = $("#dane12").val();
    let dataOfExpiration = $("#dane13").val();
    if( cardNumber === '' || firstLastName === '' || cvv === '' || dataOfExpiration ===''){
        alert("Insert all inputs")
    }else{
        userInfo={
            cardNumber: cardNumber,
            firstLastName: firstLastName,
            cvv: cvv,
            dataOfExpiration: dataOfExpiration,
        }
        let value = JSON.parse(localStorage.getItem('userInfo'));
        let result =  Object.assign(value, userInfo);
        localStorage.setItem('userInfo', JSON.stringify(result));


    }

}

function sendEmail(){
    $.post(
        "php/mail.php",
        {
            "userInfo": JSON.parse(localStorage.getItem('userInfo')),
            "cart": cart,
        },
        function (data) {
           let res = JSON.parse(data)
            if(res.status==='success'){
                window.location.replace("../Bookstore/koszyk5.html")

            }else {
                alert('Repeat order')
            }
        }
    )
}




$(document).ready(function () {
    loadCart();
    $(".cart-next-button").on('click', ()=>{
        window.location.replace("../Bookstore/koszyk1.html")
    });
    $(".cart1-next-button").on('click', checkInputs);
    $(".cart2-next-button").on('click', checkInputs2);
    $(".cart3-next-button").on('click', checkInputs3);
    $(".cart4-next-button").on('click', checkInputs4);
    $(".acceptDeliver").on('click', sendEmail);
    $('#oneChoice input:checkbox').click(function(){
        if ($(this).is(':checked')) {
            $('#oneChoice input:checkbox').not(this).prop('checked', false);        }
    });

})