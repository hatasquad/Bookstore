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
    <script type="text/javascript" src="js/addToCart.js"></script>
    <script type="text/javascript" src="js/searchBook.js"></script>
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
<div class="row" id="display">

</div>