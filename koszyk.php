<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="slick/slick.min.js"></script>
    <script src="js/searchScale.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Main</title>
</head>
<body>
<header class="header">
    <div class="header-up">
        <div class="row">
            <div class="header__logo col-md-3 ">
                <a href="index.php"><img class="header__logo__img" src="img/logo.svg" alt="LOGO"></a>
            </div>
            <div class="header__search col-md-7">
                <form  class="header__form active-pink-3 active-pink-4 mb-4">
                    <input class="form-control header__search__input" id="hInput" type="text" placeholder="Wyszukaj..." aria-label="Search">
                    <button class="header__form__button" type="submit"><img id="loupe" src="img/Component 17 – 1.svg"></button>
                </form>
            </div>
            <div class="header__btn col-md-2">
                <form class="header__form-login" action="./php/exit.php" target="_blank">
                    <button class="header__form-right__btn mainBtn"><?php
                        if( isset($_COOKIE["user"])):
                            ?><?=$_COOKIE['user']?>
                        <?php else: ?> Log in
                        <?php endif;?>
                    </button>
                </form>
                <form class="header__form-cart" action="koszyk.php" target="_blank">
                    <button class="header__form-cart">
                        <img src="img/koszyk2.svg" alt="cart">
                    </button>
                    <div class="header__form-cart-increment">
                        <p class="cart-count">1</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</header>
<div class="header-down">
    <nav class="header__nav">
        <ul class="header__nav__list container">
            <li class="header__nav__list__item">
                <a href="#"><i class="fas fa-bars"></i>  Książki</a>
            </li>
            <li class="header__nav__list__item"><a href="#new" >Nowe</a></li>
            <li class="header__nav__list__item"><a href="promocje.php">Promocje</a></li>
            <li class="header__nav__list__item"><a href="authors.php">Autory</a></li>
            <li class="header__nav__list__item"><a href="pulitzer2018.php">Ranking</a></li>
            <li class="header__nav__list__item"><a href="#">Obserwuj nas</a></li>
        </ul>
    </nav>
</div>

<section class="cart__section container">
    <div class="back-button">
        <a class="secondary-link" href="#"><span class="secondary-text"> &lt;powrót </span> </a>
    </div>

        <div class="cart__title">
           <h1 class="">Twój aktualny koszyk</h1>
        </div>
        <div class="cart__parametrs">

            <h2>Ilość</h2>
            <h2>Cena</h2>
        </div>
        <div class="cart">

        </div>

        <div class="row ">
            <div class="col-md-10"></div>
            <div class="sum col-md-2">
                <h2 class="sum-text sub-title ">
                                Razem
                </h2>
            
                <h2 class="sum-num "><span class="sumPrice">0.00</span>  <span>zł</span> </h2>
            </div>
        </div>
        <div class="row cart__button__box">
            <div class="col-md-3"></div>
            <button class="cart__button orangeBg col-md-4">
                Kontynuuj zakupy
            </button>
            <div class="col-md-1"></div>
            <button class="cart__button col-md-4 cart-next-button">
                Przejdż do zamówienia
            </button>
        </div>

    </section>
     <section class="second-section ">
        <div class="second-wrapper ">
        <h1 class="title">NOWOŚCI!</h1>
        <h2 class="sub-title"> WYBIERZ COŚ DLA SIEBIE </h2>
            <div class="second-slider">
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div> 
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
                <div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="img/slider2/book3.svg" alt="boock"> </a>
                        <h4 class="">Autor: <strong>Nazwa</strong></h4>
                        <form action="#" class="">
                            <button class=" mainBtn ">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require 'footer.php'?>


   
    