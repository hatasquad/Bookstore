<?php require 'header.php'?>
    <section class="first-section">
        <div class="slider container">
            <h1 class="col-md-8 title">Najlepsze za tydzień!</h1>
            
                <div class="slider__box">
                    <?php

                    require ('php/books.php');
                    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo '<div class="slider__content row d-flex">
                            <div class="slider__left col-md-3">
                                <a href="book_cart.php#'.$row['id'].'" target="_blank" > <img class="slider__left__img" src="'.$row['img'].'"> </a>
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
                        <a href="book_cart.php#'.$row['id'].'" class="second-slider__link"><img class="second-slider__img" src="'.$row['img'].'" alt=\"boock\"> </a>
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
                        <a href="book_cart.php#'.$row['id'].'" class="second-slider__link"><img class="second-slider__img" src="'.$row['img'].'" alt=\"boock\"> </a>
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
                        <a href="book_cart.php#'.$row['id'].'" class="second-slider__link"><img class="second-slider__img" src="'.$row['img'].'" alt=\"boock\"> </a>
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
    <?php require 'footer.php' ?>