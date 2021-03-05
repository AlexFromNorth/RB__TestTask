<?php

require_once 'include/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/media.css">
</head>

<body>

  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid navbar__menu">
        <a id="navbar-brand" class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="">
          <div  class="d-flex row header__logo_contacts">
            <a  class="header__logo_contacts1 p-0 m-0" href="tel:88632431510">8(863)243-15-10</a>
            <p  class="header__logo_contacts2 p-0 m-0">Ростов-на-Дону</p>
          </div>
        </a>
        <button onclick="toggleClass()" class="menu__btn " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu__btn-line"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Портфолио</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Отзывы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Вакансии</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
          </ul>
          <div class="d-flex row header__navbar_contacts">
            <a class="p-0 m-0 header-number" href="tel:88632431510">8(863)243-15-10</a>
            <p class="p-0 m-0 header-phone">Ростов-на-Дону</p>
          </div>
        </div>
      </div>
    </nav>

  </header>

  <section class="main container-fluid">
    <div class="main__info">
      <h1>Рекламно-информационное агентство</h1>
      <p>Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
      <form class="main__button" method="POST">
        <input class="main__button_input" placeholder="Номер телефона" type="text">
        <button class="btn btn-danger main__button_submit" type="submit">Обратный звонок</button>
      </form>
    </div>
  </section>

  <section class="slider-container container">
    
      <h2>Новости</h2>

      <!-- слайдер с данным из sql -->

      <div class="thumbnail-slider">
        <div class="slider-decoration">
          <div class="slider-decoration__start"></div>
          <div class="slider-decoration__end"></div>
        </div>
        <div class="thumbnail-container">
  
<?php

$count_db = mysqli_query($connect, "SELECT COUNT(*) FROM `insert-item`"); 
$count = mysqli_fetch_row($count_db)[0];

$i = 1;
while ($i <= $count):
    $select_db = mysqli_query($connect, "SELECT * FROM `insert-item` WHERE `id` = $i ");
    $data_db = mysqli_fetch_assoc($select_db);
    ?>
          <div class="item">
            <div class="slider__data"><?= $data_db['data'] ?></div>
            <div class="slider__text"><?= $data_db['text'] ?></div>
            <button  class="slider__btn">Подробнее</button>
          </div>
    <?php
    $i++;
endwhile;

?>

        </div>
        <!-- controls slides -->
        <div class="controls"></div>
    </div>  
  </section>

  <footer class="footer">
      <div class="container-fluid container__footer">
        <a class="footer__brand" href="#"><img src="assets/images/logo__footer.svg" alt=""></a>
        <nav class="footer__nav">
          <ul class="navbar-nav  footer__ul">
            <li class="nav-item">
              <a class="nav-link" href="#">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Портфолио</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Отзывы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Вакансии</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="footer__mobile">
          <p class="p-0 m-0">Ростов-на-Дону, Ленина, 21</p>
          <a class="p-0 m-0 footer__header-number" href="tel:88632431510">8(863)243-15-10</a>
      </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>