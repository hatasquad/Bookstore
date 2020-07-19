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
    <script type="text/javascript" src="js/addToCart.js"></script>
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
                    <form class="header__form-cart" action="koszyk.html" target="_blank">
                        <button class="header__form-cart">
                            <img src="img/koszyk2.svg" alt="cart">
                        </button>
                        <div class="header__form-cart-increment">
                            <p>1</p>
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
                    <li class="header__nav__list__item"><a href="promocje.html">Promocje</a></li>
                    <li class="header__nav__list__item"><a href="authors.html">Autory</a></li>
                    <li class="header__nav__list__item"><a href="pulitzer2018.html">Ranking</a></li>
                    <li class="header__nav__list__item"><a href="#">Obserwuj nas</a></li>
                </ul>
            </nav>
        </div>
    <section class="first-section">
        <div class="slider container">
            <h1 class="col-md-8 title">Najlepsze za tydzień!</h1>
            
                <div class="slider__box">
                    <?php

                    require ('php/books.php');
                    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo '<div class="slider__content row d-flex">
                            <div class="slider__left col-md-3">
                                <a href="#"> <img class="slider__left__img" src="'.$row['img'].'"> </a>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="slider__right col-md-8">
                                <h3>'.$row['title'].'</h3>
                                <h4 class="">'.$row['author'].'</h4>
                                <p class="slider__right-text pText">
                                    '.$row['description'].'
                                </p>
                                <form action="" class="">
                                    <button class="slider__button-cart mainBtn addToCartBtn" data-id="'.$row['id'].'">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                                </form>
                            </div>           
                    </div>';
                    }
                    ?>
                </div>
        </div>
    </section>
    <a name="new"></a>
    <section class="second-section">
        <div class="second-wrapper ">
        <h1  class="title">NOWOŚCI!</h1>

        <h2 class="sub-title"> WYBIERZ COŚ DLA SIEBIE </h2>
            <div class="second-slider">
                <?php
                require ('php/books.php');
                while ($row = mysqli_fetch_array($newBook,MYSQLI_ASSOC)){
                    echo '<div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="'.$row['img'].'" alt=\"boock\"> </a>
                        <h3 class="text-center"><strong class="">'.$row['title'].'</strong></h3>
                        <h4 class="text-center">'.$row['author'].' </h4>
                        <form action="" class=" ">
                            <button class="mainBtn addToCartBtn" data-id="'.$row['id'].'">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>';
                }

                ?>
            </div>
        </div>
    </section>
    <section class="third-section">
        <div class="container">
            <h1 class="title"> OD PIERWSZEJ OSOBY!</h1>
            <h2 class="sub-title">J.K. Rowling o nowej części Harry Pottera</h2> 
            <div class="third-content row">
                <figure class="content-left col-md-3">
                    <img class="content__img" src="img/Rowling.svg" alt="Rowling">
                    <figcaption class="img__caption"><em> J.K. Rowling</em> </figcaption>
                </figure>
                <div class="col-md-1"></div>
                <div class="content-right col-md-8">
                    <p class="content__text pText">Swoego pierwszego męża, młodszego o trzy lata studenta dziennikarstwa, 
                        Jorge Arentesa, poznała w Portugalii, gdzie pracowała jako nauczycielka
                        angielskiego. Poznali się barze, okazało się, że oboje są miłośnikami Jane 
                        Austin. Po kilku dniach zaczęli się spotykać. Pobrali się w październiku 
                        1992 roku. Niestety, małżeństwo trwało tylko 13 miesięcy i jeden dzień.
                        Została po nim córka, Jessica. O tym i o czymś więcej dowiedż się z 
                        naszego wywiadu z legendarną anglijką!</p>
                        <form action="#" class="">
                            <button class=" mainBtn ">Czytaj więcej! >> </button>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <section class="second-section ">
        <div class="second-wrapper ">
        <h1 class="title">NOWOŚCI!</h1>
        <h2 class="sub-title"> WYBIERZ COŚ DLA SIEBIE </h2>
            <div class="second-slider">
                <?php
                require ('php/books.php');
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo '<div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="'.$row['img'].'" alt=\"boock\"> </a>
                        <h3 class="text-center"><strong class="">'.$row['title'].'</strong></h3>
                        <h4 class="text-center">'.$row['author'].' </h4>
                        <form action="" class=" ">
                            <button class=" mainBtn addToCartBtn" data-id="'.$row['id'].'">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>';
                }

                ?>
            </div>
        </div>
    </section>
    <section class="third-section four ">
        <div class="container">
            <h1 class="title">Poznaj naszą ofertę!</h1>
            <h2 class="sub-title">Weż udział w naszum konkursie i wygraj książkę od nowego perspektywnego autora</h2> 
            <div class="third-content row">
                <div class="content-right col-md-8">
                    <p class="content__text pText">Swego pierwszego męża, młodszego o trzy lata studenta dziennikarstwa, 
                        Jorge Arentesa, poznała w Portugalii, gdzie pracowała jako nauczycielka
                        angielskiego. Poznali się barze, okazało się, że oboje są miłośnikami Jane 
                        Austin. Po kilku dniach zaczęli się spotykać. Pobrali się w październiku 
                        1992 roku. Niestety, małżeństwo trwało tylko 13 miesięcy i jeden dzień.
                        Została po nim córka, Jessica. O tym i o czymś więcej dowiedż się z 
                        naszego wywiadu z legendarną anglijką!</p>
                        <form action="#" class="">
                            <button class=" mainBtn ">Szczegóły</button>
                        </form>
                </div>
                <div class="col-md-1"></div>
                <figure class="content-left col-md-3">
                    <img class="content__img" src="img/book2.svg" alt="Rowling">
                    <figcaption class="img__caption"><em>Rybkin Mykhailo</em> </figcaption>
                </figure>
            </div>
        </div>    
    </section>
    <section class="second-section ">
        <div class="second-wrapper ">
        <h1 class="title">NOWOŚCI!</h1>
        <h2 class="sub-title"> WYBIERZ COŚ DLA SIEBIE </h2>
            <div class="second-slider">
                <?php
                require ('php/books.php');
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo '<div class="second-slider__box">
                    <div class="second-slider__content">
                        <a href="#" class="second-slider__link"><img class="second-slider__img" src="'.$row['img'].'" alt=\"boock\"> </a>
                        <h3 class="text-center"><strong class="">'.$row['title'].'</strong></h3>
                        <h4 class="text-center">'.$row['author'].' </h4>
                        <form action="" class=" ">
                            <button class=" mainBtn addToCartBtn" data-id="'.$row['id'].'">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                        </form>
                    </div>
                </div>';
                }
                ?>
            </div>
            </div>
        </div>
    </section>
    <section class="third-section five">
        <div class="container ">
            <h1 class="title">Twoja opinia się liczy!</h1>
            <div class="third-content five-content row">
                <div class="content-left col-md-6">
                    <img class="content__img " src="img/opinie.svg" alt="Rowling"> 
                </div>
                
                <div class="content-right  col-md-5">
                    <p class="content__text pText">Przeczytałeś książkę, ale nie masz kolegi, 
                        z którym mógłbyś pogadać? Mamy dla 
                        ciebie wyjście: poznaj nasz forum dyskusyjny.
                        Zawsze znajdziesz kogoś do dialogu. </p>
                        
                </div>
                <form action="#" class="col-md-8 m-auto">
                    <button class=" mainBtn ">Przejdż do dyskusji</button>
                </form>
            </div>
            
        </div>
    </section>
    <footer class="footer">
        <div class="footer-up">
            <div class="footer-up__wrapper container">
                <h1 class="title">dołącz się do nas</h1>
                <div class="footer-up__box">
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-vk"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-facebook-f"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-twitter"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-instagram"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-youtube"></i></div><span class="people">300 000 osób</span></a>
                    <a href="#" class="footer-up__link"> <div class="footer-up__icon__box"> <i class="footer-up__icon fab fa-linkedin-in"></i></div><span class="people">300 000 osób</span></a>
                </div>
            </div>    
        </div>
        <div class="footer-down">
            <div class="container">
                <div class="footer-down__wrapper ">
                    <div class="footer-down__nav">
                        <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca <span>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                        </ul>
                        <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca</span> 
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                        </ul>
                    </div>
                    <div class="footer-down__nav">
                            <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca</span> 
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            </ul>
                            <ul class="footer-down__list"> <span class="footer-down__list-mainLink"> Wspolpraca</span> 
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                                <li class="footer-down__list-item"><a href="#" class="footer-down__list-item__link">wspolpraca</a></li>
                            </ul>
                    </div>
               
                </div>    
                <div class="footer-down-spam ">
                    <div class="footer-down-spam-box"> 
                        <h1 class="footer-down-spam-text" >OTRZYMUJ WIĘCEJ</h1>
                        <form class="footer-down__form">
                            <div class="footer-down__form__wrapper">
                                <input type="text" class="footer-down__form__input" placeholder="Name">
                                <input type="email" class="footer-down__form__input" placeholder="Email">
                                <input type="submit" value="SUBMIT" class="footer-down__form__button">
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
            

        </div>

        <div class="copyright">
            <h4 class="copyright-text" > @copyright </h4>
        </div>

    </footer>

   
   
</body>
</html>