<?php

// Подключаем файл конфигурации
$servername = "localhost";
$userDb =  "root";
$passwd = '';
$dbname = 'register-bd';

$connectionDB = new mysqli($servername,$userDb,$passwd,$dbname);


// Получаем значение переменной "search" из файла "script.js".
if (isset($_POST['search'])) {

    // Помещаем поисковой запрос в переменной
    $Name = $_POST['search'];

    // Запрос для выбора из базы данных
    $Query = "SELECT * FROM `Books` WHERE title LIKE '%$Name%'";

    //Производим поиск в базе данных
    $ExecQuery = mysqli_query($connectionDB, $Query);
    if (!$ExecQuery) {
        printf("Error: %s\n", mysqli_error($connectionDB));
        exit();
    }
    // Создаем список для отображения результатов
    echo '<ul>';

    //Перебираем результаты из базы данных
    while ($Result = mysqli_fetch_array($ExecQuery)) {
        ?>
        <!-- Создаем элементы списка. При клике на результат вызываем функцию обработчика fill() из файла "script.js". В параметре передаем найденное имя-->

        <li onclick='fill("<?php echo $Result['title']; ?>")'>
            <a>
                <?php echo '<div class="slider__content row d-flex">
                            <div class="slider__left col-md-3">
                                <a href="book_cart.php#'.$Result['id'].'" target="_blank" > <img class="slider__left__img img-srch" src="'.$Result['img'].'"> </a>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="slider__right col-md-8">
                                <h3><a class="text-title" href="book_cart.php#">'.$Result['title'].'</a></h3>
                                <h4 class="text-muted">'.$Result['author'].'</h4>
                                <p class="slider__right-text text-srch pText">
                                    '.$Result['description'].'
                                </p>
                                <form action="" class="">
                                    <button class="slider__button-cart mainBtn addToCartBtn" data-id="'.$Result['title'].'">Do koszyka  <i class="fas fa-cart-arrow-down"></i></button>
                                </form>
                            </div>           
                    </div>' ?>
            </a>
        </li>

        <?php
    }
}
?>
</ul>